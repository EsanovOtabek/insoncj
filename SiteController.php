<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Issue;
use App\Models\News;
use App\Models\Year;

class SiteController extends Controller
{
    public function index(){
        $journals = Issue::leftJoin('years', function ($join){
            $join->on('years.id', '=', 'issues.year_id');
        })->select('issues.*', 'years.year')->latest()->take(4)->get();

        $news = News::latest()->take(3)->get();

        return view('web.index',[
            'journals' => $journals,
            'news' => $news,
        ]);
    }

    public function about(){
        return view('web.about');
    }

    public function news(){
        return view('web.news',[
            'news' => News::orderBy('id','DESC')->get(),
        ]);
    }

    public function newsShow(News $news){
        return view('web.newsShow',[
                'news' => $news,
                'latest6'=>News::latest()->take(6)->get(),
        ]);
    }

    public function archive(){
        $journals = Issue::leftJoin('years', function ($join){
            $join->on('years.id', '=', 'issues.year_id');
        })->select('issues.*', 'years.year')->orderBy('number')->get();

        return view('web.archive',[
            'journals' => $journals,
            'years' => Year::all(),
        ]);
    }

    public function experts(){
        return view('web.experts',[
            'experts' => Expert::all(),
        ]);
    }

}
