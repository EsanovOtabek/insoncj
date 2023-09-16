<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Doi;
use App\Models\Expert;
use App\Models\Issue;
use App\Models\News;
use App\Models\Statik;
use App\Models\User;
use App\Models\Year;

class SiteController extends Controller
{
    public function index(){
        $journals = Issue::leftJoin('years', function ($join){
            $join->on('years.id', '=', 'issues.year_id');
        })->select('issues.*', 'years.year')->latest()->take(4)->get();

        $news = News::latest()->take(3)->get();
        $static = Statik::find(1);


        return view('web.index',[
            'journals' => $journals,
            'news' => $news,
            'c_users' => User::count(),
            'c_articles' => Article::count(),
            'c_issues' => Issue::count(),
            'c_experts' => Expert::count(),
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function about(){
        $static = Statik::find(1);

        return view('web.about',[
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function news(){
        $static = Statik::find(1);

        return view('web.news',[
            'news' => News::orderBy('id','DESC')->get(),
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function newsShow(News $news){
        $static = Statik::find(1);

        return view('web.newsShow',[
                'news' => $news,
                'latest6'=>News::latest()->take(6)->get(),
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function archive(){
        $static = Statik::find(1);

        $journals = Issue::leftJoin('years', function ($join){
            $join->on('years.id', '=', 'issues.year_id');
        })->select('issues.*', 'years.year')->orderBy('number')->get();

        return view('web.archive',[
            'journals' => $journals,
            'years' => Year::all(),
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function dois($id){
        $static = Statik::find(1);

        $issue = Issue::find($id);
        $dois = Doi::where('issue_id','=',$issue->id)->orderBy('id','desc')->get();

        return view('web.archive_dois',[
            'dois'=>$dois,
            'journal'=>$issue,
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function doi_show(Doi $doi){
        $static = Statik::find(1);

        return view('web.doi_show',[
            'doi'=>$doi,
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function experts(){
        $static = Statik::find(1);

        return view('web.experts',[
            'experts' => Expert::all(),
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

}
