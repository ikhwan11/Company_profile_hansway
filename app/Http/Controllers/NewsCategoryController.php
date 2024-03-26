<?php

namespace App\Http\Controllers;

use App\Models\News_category;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        return view('back_end/news_article/news-category', [
            'title' => 'News & Article',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:news_categories',
        ]);

        News_category::create($validatedData);

        return redirect('/News-and-article')->with('pesan', 'Kategori berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(News_category $news_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News_category $news_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News_category $news_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News_category $news_category)
    {
        //
    }
}
