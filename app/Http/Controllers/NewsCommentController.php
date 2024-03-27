<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\News_comment;
use Illuminate\Http\Request;

class NewsCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, News $news)
    {

        $validatedData = $request->validate(
            [
                'news_id' => 'required',
                'name' => 'required',
                'komen' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Please check the capcha',
            ]
        );

        News_comment::create($validatedData);

        return redirect()->route('news.show', ['news' => $news->slug])->with('pesan', 'Your comment successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(News_comment $news_comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News_comment $news_comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News_comment $news_comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News_comment $news_comment)
    {
        //
    }
}
