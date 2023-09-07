<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

//    for admin
    public function all(Request $request){
        $issue_id = $request->issue;
        $status = $request->status;
        $cmp = "=";

        if(is_null($issue_id)) $cmp = "!=";

        if($status == "accepted" or $status=="rejected" or $status=="waiting"){
            $articles = Article::where('articles.issue_id',$cmp,$issue_id)->where('articles.status','=',$status)->orderBy('id','desc')->get();
        }else{
            $articles = Article::where('articles.issue_id',$cmp,$issue_id)->orderBy('id','desc')->get();

        }

        return view('admin.articles',[
            'articles' => $articles,
        ]);
    }

    public function details(Article $article){

        return view('admin.article-details',[
            'article' => $article,
        ]);
    }

    public function status(Article $article, Request $request){
        if($request->status == 'waiting' || $request->status == 'accepted' || $request->status == 'rejected'){
            $article->status = $request->status;
            $article->save();

            return redirect()->back()->with('success_msg', "Status o'zgartirildi!");
        }

        return response('Bad request',400);
    }


    public function comment(Article $article, Request $request)
    {
        $comment = "";

        if(!is_null($request->comment)){
            $date = date('d.m.Y H:i:s');

            $comment = "<hr>";
            $comment .= "<i>" . $request->comment . "</i>";
            $comment .= "<br><p><b>Yozilgan vaqt: </b>" . $date. "</p><br>";
            $article->comment = $article->comment . $comment;

            $article->save();
            return redirect()->back()->with('success_msg', "Xabar yuborildi!");
        }

        return redirect()->back()->with('error_msg', "Xatolik yuz berdi!");
    }
//  end form admin

//  for users
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


    public function edit(Article $article)
    {

        return view('user.article-edit',[
            'article' => $article
        ]);
    }

    public function download($file){
    }

    public function update(Request $request, Article $article)
    {
        $data  = $this->validateData2();
        $data['file'] = $article['file'];
        if($request->hasFile('file')){
            $file = $request->file('file');
            $file_name = md5(time() . "_" . $data['user_id']) . "." . $file->extension();
            $ff = $file->storeAs('article',$file_name);

            Storage::delete('article/'.$article['file']);
            $data['file'] = $file_name;
        }
        $article->update($data);

        return redirect()->back()->with('success_msg',"O'zgarishlar saqlandi!");

    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()->with('success_msg',"Maqolangiz o'chirildi!");
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

    public function validateData2(){
        return request()->validate([
            'title' => 'required',
            'authors' => 'required',
            'keywords' => 'required',
            'abstract' => 'required',
        ]);
    }
}
