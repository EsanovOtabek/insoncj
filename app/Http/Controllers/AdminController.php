<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Expert;
use App\Models\Issue;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return redirect()->route('admin.index');
    }

    public function home()
    {

        return view('admin.home',[
            'users' => User::count(),
            'articles' => Article::count(),
            'issues' => Issue::count(),
            'experts' => Expert::count(),
        ]);
    }
}
