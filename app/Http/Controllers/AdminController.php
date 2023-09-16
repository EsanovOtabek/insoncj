<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Expert;
use App\Models\Issue;
use App\Models\Statik;
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

    public function static_elements(){
        $static = Statik::find(1);

        return view('admin.static',[
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function static_update(Request $request){
        $data = $this->validateData();
        $st = Statik::findOrFail(1);
        $st->update($data);
        return redirect()->back()->with('success_msg',"Ma'lumotlar yangilandi!");

    }

    public function validateData(){
        return request()->validate([
            'static_tel1'=>'required',
            'static_tel2'=>'required',
            'static_tel3'=>'required',
            'static_email'=>'required',
            'adress_uz'=>'required',
            'adress_en'=>'required',
            'adress_ru'=>'required',
        ]);
    }


}
