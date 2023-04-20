<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function index()
    {
        $val = '>';
        $req = '0';
        if(auth()->user()->role == 'user'){
            $val = '=';
            $req = auth()->user()->id;
        }
        $articles = Article::where('user_id',$val,$req)->get();

        return view('user.articles',[
            'articles' => $articles,
        ]);
    }

    public function create()
    {
        return view('user.article-create',[
            'last_issue' => Issue::get()->last(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validateData();
        $data['issue_id'] = (Issue::get()->last())['id'];
        $data['user_id'] = 0;
        if(auth()->user()->role == 'user')
            $data['user_id'] = auth()->user()->id;

        $file = $request->file('file');
        $file_name = md5(time() . "_" . $data['user_id']) . "." . $file->extension();
        $ff = $file->storeAs('article',$file_name);

        $data['file'] = $file_name;

        Article::create($data);

        return redirect()->back()->with('success_msg','Maqola yuborildi!');
    }


    public function show(Article $article)
    {

    }

    public function edit(Article $article)
    {
        //
    }

    public function download($file){
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Storage::disk('journals/'.$file,$file,$headers);

    }

    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

    }

    public function validateData(){
        return request()->validate([
            'title' => 'required',
            'authors' => 'required',
            'keywords' => 'required',
            'abstract' => 'required',
            'file' => 'mimes:doc,docx|max:15360',
        ]);
    }
}
