<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class CategoryController extends Controller
{
    public function index()
{
    $categories = Category::orderBy('created_at', 'desc')->paginate(10);
    // dd($categories);
    return view('managers.m_category.manager_category', compact('categories'));
}
public function create()
{
    // dd('create method is called');
    $parentCategories = Category::all(); // Lấy tất cả danh mục hiện có để hiển thị
    // dd($parentCategories);
    return view('managers.m_category.add_category', compact('parentCategories'));
}
public function store(Request $request)
{
    $request->validate([
        'CategoryName' => 'required|string|max:20',
        'parent_id' => 'nullable|exists:categories,CategoryID',
        'IsVisible' => 'required|boolean',
    ]);

    try {
        Category::create([
            'CategoryName' => $request->CategoryName,
            'parent_id' => $request->parent_id,
            'IsVisible' => $request->IsVisible,
        ]);

        return redirect()->route('category.create')
                         ->with('success', 'Category added successfully.');
    } catch (\Exception $e) {
        return redirect()->route('category.create') // Quay lại trang thêm danh mục
                         ->with('error', 'Failed to add category: ' . $e->getMessage());
    }
}
}
