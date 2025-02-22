<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('managers.m_user.manager_user', compact('users'));
    }

    public function create()
    {
        return view('managers.m_user.add_user'); // Chỉ định view cho form thêm người dùng
    }

    public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào với các điều kiện cụ thể
        $request->validate([
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
        ]);

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
    public function edit($id)
    {
        // Lấy thông tin người dùng theo ID
        $user = User::findOrFail($id); // Lấy người dùng theo ID
        return view('managers.m_user.update_user', compact('user')); // Truyền biến user vào view
    }

public function update(Request $request, $id)
{
    // Xác thực dữ liệu đầu vào
    $request->validate([
        'Username' => 'required|string|max:50',
        'Password' => 'nullable|string|min:8|confirmed', // Mật khẩu có thể để trống
        'Role' => 'required|in:Staff,Admin',
        'Email' => 'required|email|max:100|unique:Users,Email,' . $id, // Kiểm tra tính duy nhất trừ ID hiện tại
        'Phone' => 'nullable|string|max:20',
    ]);

    // Cập nhật người dùng
    $user = User::findOrFail($id);
    $user->Username = $request->Username;
    if ($request->Password) {
        $user->Password = Hash::make($request->Password); // Chỉ cập nhật mật khẩu nếu có giá trị mới
    }
    $user->Role = $request->Role;
    $user->Email = $request->Email;
    $user->Phone = $request->Phone;

    $user->save();

    return redirect()->route('managers.m_user.update_user')->with('success', 'User updated successfully!');
}
}
