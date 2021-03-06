<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Redirect;
use Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->where('category', '=' , request()->category)->values();
        return Inertia::render('ArticlesListing', ['articles' => $articles]);
    }

    public function saveFileToDisc($name, $blob) {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('NewArticle', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $article_id)
    {
        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->short = $request->short;
        $article->content = $request->content;
        $article->filename_image = 'img_article_' . $article_id . '.png';
        Storage::put($article->filename_image, $request->file('image'));
        $article->save();

        return Redirect::route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article->author = User::all()->where('id', '=', $article->user_id)->pluck('name')->first();
        $article->created_at_human = $article->created_at->diffForHumans();

        $comment = DB::table('comments')
            ->where('article_id', '=', $article->id)
            ->leftjoin('users', 'comments.user_id', '=', 'users.id')
            ->get();

        return Inertia::render('ArticleDetails', ['article' => $article, 'commentUser' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
