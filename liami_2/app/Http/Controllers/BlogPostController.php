<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogs = BlogPost::all(); // Retrieve all blog posts
        return view('managers.m_blog.manager_blog', compact('blogs')); // Pass the blog posts to the view
    }
    public function create()
    {
        return view('managers.m_blog.create_blog'); // Adjusted to your view path
    }

    // Store a newly created blog post in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Title' => 'required|max:20',
            'Summary' => 'required|max:100',
            'Content' => 'required',
            'ImageURL' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'IsVisible' => 'required|boolean',
        ]);

        // Handle the file upload
        $imagePath = null;
        if ($request->hasFile('ImageURL')) {
            $imagePath = $request->file('ImageURL')->store('images', 'public');
        }

        // Create a new blog post
        BlogPost::create([
            'Title' => $request->Title,
            'Summary' => $request->Summary,
            'Content' => $request->Content,
            'ImageURL' => $imagePath,
            'IsVisible' => $request->IsVisible,
            // 'AuthorID' => auth()->id(), // Get the ID of the authenticated user
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog post added successfully!');
    }



}
