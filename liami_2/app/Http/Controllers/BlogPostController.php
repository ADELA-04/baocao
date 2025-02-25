<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class BlogPostController extends Controller
{
    public function index()
    {
        try {
            $blogs = BlogPost::all(); // Lấy tất cả bài viết blog
            return view('managers.m_blog.manager_blog', compact('blogs')); // Truyền dữ liệu đến view
        } catch (\Exception $e) {
            Log::error($e->getMessage()); // Ghi lại lỗi vào log
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi lấy dữ liệu.');
        }
    }
    public function create()
    {
        return view('managers.m_blog.create_blog'); // Trả về view tạo blog
    }

    // Lưu bài viết blog mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        try {
            // Xác thực dữ liệu yêu cầu
            $request->validate([
                'Title' => 'required|max:20',
                'Summary' => 'required|max:100',
                'Content' => 'required',
                'ImageURL' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'IsVisible' => 'required|boolean',
            ]);

            // Khởi tạo biến cho đường dẫn ảnh
            $imagePath = null;

            // Kiểm tra tệp tải lên
            if ($request->hasFile('ImageURL')) {
                $file = $request->file('ImageURL');

                if ($file->isValid()) {
                    $originalName = time() . '_' . $file->getClientOriginalName(); // Đổi tên tệp để tránh trùng lặp
                    $file->move(public_path('assets/images3'), $originalName); // Lưu ảnh vào thư mục

                    $imagePath = 'assets/images3/' . $originalName; // Lưu đường dẫn ảnh
                    Log::info("Image stored at: " . $imagePath);
                } else {
                    Log::error("Uploaded file is not valid.");
                    return redirect()->back()->with('error', 'Tệp tải lên không hợp lệ.');
                }
            } else {
                Log::warning("No file uploaded.");
            }

            // Tạo bài viết blog mới
            BlogPost::create([
                'Title' => $request->Title,
                'Summary' => $request->Summary,
                'Content' => $request->Content,
                'ImageURL' => $imagePath,
                'IsVisible' => $request->IsVisible,
                'AuthorID' => Auth::id(),
            ]);

            return redirect()->route('managers.m_blog.add_blog')->with('success', 'Blog post added successfully!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('managers.m_blog.add_blog')->with('error', 'An error occurred! Please try again.');
        }
    }
}
