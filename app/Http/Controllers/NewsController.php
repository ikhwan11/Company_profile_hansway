<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\News_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    public function index()
    {
        return view('back_end/news_article/news', [
            'title' => 'News & Article',
            'category' => News_category::all(),
            'data' => News::latest()->filter(request(['search']))->paginate(5)->withQueryString()
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:news',
            'source' => 'max:500',
            'category' => 'required',
            'body' => 'required',
            'image' => 'required|image|max:5120',
            'status' => 'max:500',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('News-images');
        }

        $validatedData['id_user'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(Strip_tags($request->body), 200);

        News::create($validatedData);

        return redirect('/News-and-article')->with('pesan', 'Sucessfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('back_end/news_article/news-preview', [
            'title' => 'News & Article',
            'data' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('back_end/news_article/news-edit', [
            'title' => 'News & Article',
            'categories' => News_category::all(),
            'data' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news, $id)
    {
        $newsdata = $news::find($id);

        $rules = [
            'title' => 'required|max:255',
            'source' => 'max:500',
            'category' => 'required',
            'body' => 'required',
            'image' => 'image|max:5120',
            'status' => 'max:500',
        ];

        if ($request->slug != $newsdata->slug) {
            $rules['slug'] = 'required|max:255|unique:news';
        }

        $validatedData['id_user'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(Strip_tags($request->body), 200);
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('News-images');
        }

        News::where('id', $newsdata->id)
            ->update($validatedData);

        return redirect('/News-and-article')->with('pesan', 'Update sucessfull');
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete($news->image);
        }

        News::destroy($news->id);

        return redirect('/News-and-article')->with('pesan', 'Content deleted!');
    }
}
