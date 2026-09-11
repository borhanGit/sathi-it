<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(15);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:50'],
            'excerpt' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'cover_image' => ['nullable', 'string', 'max:1000'],
            'reading_time' => ['nullable', 'string', 'max:50'],
            'author_name' => ['nullable', 'string', 'max:100'],
            'is_featured' => ['nullable', 'boolean'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        Post::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'category' => $validated['category'],
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'cover_image' => $validated['cover_image'] ?? 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80',
            'reading_time' => $validated['reading_time'] ?? '4 min read',
            'author_name' => $validated['author_name'] ?? 'Sathi IT Team',
            'is_featured' => $request->boolean('is_featured'),
            'is_published' => $request->boolean('is_published', true),
            'published_at' => $request->boolean('is_published') ? now() : null,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Article created successfully.');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:50'],
            'excerpt' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'cover_image' => ['nullable', 'string', 'max:1000'],
            'reading_time' => ['nullable', 'string', 'max:50'],
            'author_name' => ['nullable', 'string', 'max:100'],
            'is_featured' => ['nullable', 'boolean'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $isPublished = $request->boolean('is_published');
        $publishedAt = $post->published_at;
        if ($isPublished && !$publishedAt) {
            $publishedAt = now();
        }

        $post->update([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'cover_image' => $validated['cover_image'] ?? $post->cover_image,
            'reading_time' => $validated['reading_time'] ?? $post->reading_time,
            'author_name' => $validated['author_name'] ?? $post->author_name,
            'is_featured' => $request->boolean('is_featured'),
            'is_published' => $isPublished,
            'published_at' => $publishedAt,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Article deleted successfully.');
    }
}
