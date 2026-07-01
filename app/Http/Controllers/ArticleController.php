<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category') // Eager load the relationship to avoid N+1 query problem
        // ->where([
        //     'user_id' => Auth::id()
        // ])
        ->when(request('category_id'), function($query) {
            $query->where('category_id', request('category_id'));
        })->orderBy('title', 'asc')->paginate(3);

        $categories = Category::orderBy('name', 'asc')->get();

        return view('articles.index', compact('categories', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'required|string|min:10|max:255',
            'text' => 'required|min:100|string',
            'authors_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'category_id' => 'required|exists:categories,id',
            'authors_name' => 'required|string|max:255',
            'authors_profession' => 'required|string|min:10|max:255'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $authorImagePath = $request->file('authors_image')->store('images', 'public');

        Article::create([
            'user_id' => Auth::id(),
            'image' => $imagePath,
            'title' => $request->title,
            'text' => $request->text,
            'category_id' => $request->category_id,
            'authors_image' => $authorImagePath,
            'authors_name' => $request->authors_name,
            'authors_profession' => $request->authors_profession
        ]);

        return redirect('articles');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        $categories = Category::all();

        return view('articles.edit', compact('categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'required|string|min:10|max:255',
            'text' => 'required|min:20|string',
            'authors_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'category_id' => 'required|exists:categories,id',
            'authors_name' => 'required|string|max:255',
            'authors_profession' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($article->image);

            $article->image = $request->file('image')->store('images', 'public');
        }
        if ($request->hasFile('authors_image')) {
            Storage::disk('public')->delete($article->authors_image);

            $article->authors_image = $request->file('authors_image')->store('images', 'public');
        }

        $article->title = $request->title;
        $article->text = $request->text;
        $article->category_id = $request->category_id;
        $article->authors_name = $request->authors_name;
        $article->authors_profession = $request->authors_profession;

        $article->save();

        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->image && Storage::disk('public')->exists($article->image)) {
            Storage::disk('public')->delete($article->image);
        }
        if ($article->authors_image && Storage::disk('public')->exists($article->authors_image)) {
            Storage::disk('public')->delete($article->authors_image);
        }

        $article->delete();

        return redirect('articles');
    }
}
