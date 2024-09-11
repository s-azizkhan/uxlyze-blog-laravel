<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where('blog_status', 'published')->orderBy('created_at', 'desc')->get();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'category' => 'required',
        ]);

        $blog = new Blog($validated);
        // create slug from title
        $blog->slug = \Illuminate\Support\Str::slug($validated['title']);
        $blog->blog_status = 'published';
        $blog->read_time = ceil(str_word_count(strip_tags($validated['content'])) / 200) . ' min read';

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog_images', 'public');
            $blog->image = $path;
            $blog->alt = $validated['title'];
        }

        $blog->save();

        return redirect()->route('blogs.show', $blog->slug)->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
