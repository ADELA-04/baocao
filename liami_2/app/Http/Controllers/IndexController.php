<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Apparence;
use App\Models\Banner;
use App\Models\BlogPost;
use App\Models\Product;

class IndexController extends Controller
{
    public function index2()
    {
        $blogs=BlogPost::orderBy('created_at', 'desc')->paginate(3);
        $newProduct=Product::orderBy('created_at', 'desc')->paginate(8);
        $allProduct = Product::all();
        $apparences = Apparence::all();
        $settings = Setting::all();
        $banners = Banner::all();
        // Lấy danh mục cha và danh mục con
        $topViewedProducts = Product::orderBy('View', 'desc')->take(6)->get();
        $categories = Category::with('children')->whereNull('parent_id')->get(); // Lấy danh mục cha
        return view('home.index', compact(
            'categories',
            'settings',
            'apparences',
            'banners',
            'allProduct',
            'newProduct',
            'blogs',
            'topViewedProducts'
        ));
    }
    public function list_blogs()
    {
        $blogs=BlogPost::orderBy('created_at', 'desc')->paginate(12);
        $apparences = Apparence::all();
        $settings = Setting::all();
        $banners = Banner::all();
        // Lấy danh mục cha và danh mục con
        $categories = Category::with('children')->whereNull('parent_id')->get(); // Lấy danh mục cha
        return view('blogs', compact(
            'categories',
            'settings',
            'apparences',
            'banners',
            'blogs',
        ));
    }

    public function list_contacts()
    {
        $blogs=BlogPost::orderBy('created_at', 'desc')->paginate(12);
        $apparences = Apparence::all();
        $settings = Setting::all();
        $banners = Banner::all();
        // Lấy danh mục cha và danh mục con
        $categories = Category::with('children')->whereNull('parent_id')->get(); // Lấy danh mục cha
        return view('contacts', compact(
            'categories',
            'settings',
            'apparences',
            'banners',
            'blogs',
        ));
    }
    public function show_blogs_detail($BlogID)
    {
        $blogs=BlogPost::orderBy('created_at', 'desc')->paginate(6);
        $apparences = Apparence::all();
        $settings = Setting::all();
        $banners = Banner::all();
        $blogs_detail=BlogPost::find($BlogID);
        // Lấy danh mục cha và danh mục con
        $categories = Category::with('children')->whereNull('parent_id')->get(); // Lấy danh mục cha
        return view('blogs_detail', compact(
            'categories',
            'settings',
            'apparences',
            'banners',
            'blogs',
            'blogs_detail',
        ));
    }
public function viewProductDetail($ProductID)
{

     // Lấy sản phẩm hiện tại cùng với danh mục
     $product = Product::with('category')->findOrFail($ProductID);
     $product->increment('View');
     // Lấy danh mục của sản phẩm hiện tại
     $categoryID = $product->category->CategoryID;

     // Lấy các sản phẩm khác trong cùng danh mục, sắp xếp theo ngày thêm mới
     $relatedProducts = Product::where('CategoryID', $categoryID)
         ->where('ProductID', '!=', $ProductID) // Loại bỏ sản phẩm hiện tại
         ->orderBy('created_at', 'desc') // Sắp xếp theo ngày thêm mới
         ->get();
    $product = Product::with('category')->findOrFail($ProductID);
    // Các biến khác
    $banners = Banner::all();
    $settings = Setting::all();
    $apparences = Apparence::all();
    $categories = Category::with('children')->whereNull('parent_id')->get();

    return view('products.products_detail', compact('product','relatedProducts', 'banners', 'settings', 'apparences', 'categories'));
}

public function viewAllProduct()
{

    $products = Product::orderBy('created_at', 'desc')->paginate(12);
    // Các biến khác
    $brands = Product::select('Brand')->distinct()->get();

    $banners = Banner::all();
    $settings = Setting::all();
    $apparences = Apparence::all();
    $categories = Category::with('children')->whereNull('parent_id')->get();

    return view('products.product_list', compact('products','brands', 'banners', 'settings', 'apparences', 'categories'));
}

public function list($category_id)
{ $brands = Product::select('Brand')->distinct()->get();
    $category = Category::find($category_id);
    $banners = Banner::all();
    $settings = Setting::all();
    $apparences = Apparence::all();
    $categories = Category::with('children')->whereNull('parent_id')->get();
    $products = Product::where('CategoryID', $category_id)->paginate(12);;
    return view('products.product_list', compact('products','category','brands', 'banners', 'settings', 'apparences', 'categories'));
}
public function searchProducts(Request $request)
{
    // Lấy từ khóa tìm kiếm
    $searchTerm = trim($request->input('search'));

    // Kiểm tra nếu từ khóa không rỗng
    if ($searchTerm) {
        // Tìm kiếm sản phẩm theo tên hoặc mô tả
        $products = Product::where('ProductName', 'like', '%' . $searchTerm . '%')
            ->orWhere('Description', 'like', '%' . $searchTerm . '%')
            ->paginate(12);
    } else {
        // Nếu không có từ khóa tìm kiếm, trả về tất cả sản phẩm
        $products = Product::paginate(12);
    }

    // Các biến khác
    $brands = Product::select('Brand')->distinct()->get();
    $banners = Banner::all();
    $settings = Setting::all();
    $apparences = Apparence::all();
    $categories = Category::with('children')->whereNull('parent_id')->get();

    return view('products.product_list', compact('products', 'brands', 'banners', 'settings', 'apparences', 'categories', 'searchTerm'));
}

public function filterByBrand(Request $request)
{
    $selectedBrand = $request->input('brand'); // Lấy thương hiệu đã chọn từ yêu cầu

    // Lấy danh sách sản phẩm theo thương hiệu
    $products = Product::where('Brand', $selectedBrand)->paginate(12);

    // Các biến khác
    $brands = Product::select('Brand')->distinct()->get();
    $banners = Banner::all();
    $settings = Setting::all();
    $apparences = Apparence::all();
    $categories = Category::with('children')->whereNull('parent_id')->get();

    return view('products.product_list', compact('products', 'brands', 'banners', 'settings', 'apparences', 'categories', 'selectedBrand'));
}

public function filterByPrice(Request $request)
{
    $minPrice = $request->input('min_price', 0); // Giá tối thiểu
    $maxPrice = $request->input('max_price', 3000); // Giá tối đa

    // Lấy danh sách sản phẩm theo khoảng giá
    $products = Product::whereBetween('SalePrice', [$minPrice, $maxPrice])->paginate(12);

    // Các biến khác
    $brands = Product::select('Brand')->distinct()->get();
    $banners = Banner::all();
    $settings = Setting::all();
    $apparences = Apparence::all();
    $categories = Category::with('children')->whereNull('parent_id')->get();

    return view('products.product_list', compact('products', 'brands', 'banners', 'settings', 'apparences', 'categories', 'minPrice', 'maxPrice'));
}

public function filterByCategory(Request $request)
{
    $selectedCategoryIDs = $request->input('category_id', []); // Lấy mảng các danh mục đã chọn
    $brands = Product::select('Brand')->distinct()->get();
    // Lấy danh sách sản phẩm theo các danh mục đã chọn
    $products = Product::when(!empty($selectedCategoryIDs), function ($query) use ($selectedCategoryIDs) {
        $query->whereIn('CategoryID', $selectedCategoryIDs);
    })->paginate(12);

    // Các biến khác
    $categories = Category::with('children')->whereNull('parent_id')->get();

    $banners = Banner::all();
    $settings = Setting::all();
    $apparences = Apparence::all();

    return view('products.product_list', compact('products', 'brands','categories', 'banners', 'settings', 'apparences', 'selectedCategoryIDs'));
}


}
