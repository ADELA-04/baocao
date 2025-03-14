<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class UserController extends Controller
{
    public function index(Request $request)
{
    try {
        // Lấy từ khóa tìm kiếm từ request
        $search = $request->input('email'); // Tên biến tìm kiếm

        // Lấy tất cả người dùng, sắp xếp theo thời gian tạo giảm dần
        $users = User::when($search, function ($query) use ($search) {
                return $query->where('Email', 'like', strtolower($search) . '%'); // Tìm kiếm theo email bắt đầu bằng từ khóa
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Lấy 10 người dùng mỗi trang

        return view('managers.m_user.manager_user', compact('users', 'search')); // Truyền dữ liệu đến view
    } catch (\Exception $e) {
        Log::error($e->getMessage()); // Ghi lại lỗi vào log
        return redirect()->back()->with('error', 'Có lỗi xảy ra khi lấy dữ liệu.');
    }
}

    public function create()
    {
        return view('managers.m_user.add_user'); // Chỉ định view cho form thêm người dùng
    }

    public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào với các điều kiện cụ thể
        $request->validate(
            [
                'Username' => 'required|string|max:20', // Tối đa 20 ký tự
                'Password' => 'required|string|min:8|confirmed', // Tối thiểu 8 ký tự, xác nhận mật khẩu
                'Role' => 'required|in:Staff,Admin', // Chỉ cho phép 'Staff' hoặc 'Admin'
                'Email' => 'required|email|max:100|unique:Users,Email', // Địa chỉ email là duy nhất và hợp lệ
                'Phone' => 'nullable|string|max:20', // Tối đa 20 ký tự, có thể để trống
            ],
            // Tùy chỉnh thông báo lỗi
            [
                'Username.required' => 'Tên người dùng là bắt buộc.',
                'Username.max' => 'Tên người dùng không được vượt quá 50 ký tự.',
                'Password.required' => 'Mật khẩu là bắt buộc.',
                'Password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
                'Password.confirmed' => 'Mật khẩu xác nhận không khớp.',
                'Role.required' => 'Vai trò là bắt buộc.',
                'Email.required' => 'Địa chỉ email là bắt buộc.',
                'Email.email' => 'Địa chỉ email không hợp lệ.',
                'Email.max' => 'Địa chỉ email không được vượt quá 100 ký tự.',
                'Email.unique' => 'Địa chỉ email đã tồn tại.',
                'Phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',
            ]
        );

        try {
            // Tạo người dùng mới
            User::create([
                'Username' => $request->Username,
                'Password' => Hash::make($request->Password),
                'Role' => $request->Role,
                'Email' => $request->Email,
                'Phone' => $request->Phone,
            ]);

            return redirect()->route('managers.m_user.add_user')->with('success', 'User added successfully!');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return redirect()->back()->withErrors(['Email đã tồn tại. Vui lòng sử dụng email khác.']);
            }
            return redirect()->back()->withErrors(['Đã xảy ra lỗi. Vui lòng thử lại sau.']);
        }
    }
    public function edit($userID)
    {
        // Lấy thông tin người dùng theo ID
        $user = User::findOrFail($userID); // Lấy người dùng theo ID

        return view('managers.m_user.update_user', compact('user')); // Truyền biến user vào view
    }

    public function update(Request $request, $userID)
    {
        // Xác thực dữ liệu
        $request->validate([
            'Username' => 'required|max:20',
            'Email' => 'required|email',
            'Current_Password' => 'required|string', // Mật khẩu cũ là bắt buộc
            'Password' => 'nullable|min:6|confirmed', // Mật khẩu mới có thể để trống
        ]);

        // Tìm người dùng
        $user = User::findOrFail($userID);

        // Kiểm tra mật khẩu cũ
        if (!Hash::check($request->input('Current_Password'), $user->Password)) {
            return redirect()->back()->withErrors(['Current_Password' => 'Mật khẩu cũ không chính xác.']);
        }

        // Cập nhật thông tin người dùng
        $user->Username = $request->input('Username');
        $user->Email = $request->input('Email');

        // Cập nhật mật khẩu mới nếu có
        if ($request->filled('Password')) {
            $user->Password = Hash::make($request->input('Password'));
        }

        $user->save(); // Lưu thay đổi

        return redirect()->route('managers.m_user.manager_user')->with('success', 'Cập nhật thành công!');
    }
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('managers.m_user.manager_user')->with('success', 'Người dùng đã được xóa!');
        }

        return redirect()->route('managers.m_user.manager_user')->with('error', 'Người dùng không tồn tại.');
    }

    public function editProfile()
{
    // Lấy thông tin người dùng hiện tại
    $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập

    return view('acounts.profile_admin', compact('user')); // Truyền biến user vào view
}

public function updateProfile(Request $request)
{
    // Xác thực dữ liệu
    $request->validate([
        'Username' => 'required',
        'Email' => 'required|email',
        'Phone' => 'nullable|string',
        'Avartar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra hình ảnh
    ]);

    // Lấy thông tin người dùng hiện tại
    $user = Auth::user();

    // Cập nhật thông tin người dùng
    $user->Username = $request->input('Username');
    $user->Email = $request->input('Email');
    $user->Phone = $request->input('Phone');

    if ($request->hasFile('Avartar')) {
        $file = $request->file('Avartar');

        if ($file->isValid()) {
            $originalName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images3'), $originalName);
            $user->Avartar = 'assets/images3/' . $originalName; // Update the image URL
        }
    }

    try {
       $user->save();
    } catch (\Exception $e) {

        return redirect()->route('profile.edit')->withErrors(['error' => 'Đã xảy ra lỗi khi cập nhật hồ sơ.']);
    }

    return redirect()->route('profile.edit')->with('success', 'Cập nhật hồ sơ thành công!');
}
}
