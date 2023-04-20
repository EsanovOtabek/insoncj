<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('admin.news',[
            'news' => News::all(),
        ]);
    }

    public function create()
    {
        return view('admin.news-create');
    }

    public function store(Request $request)
    {
        $data = $this->validateData();
        $file = $request->file('image');
        $image_name = md5(time()) . "." . $file->extension();
        $file->move(public_path().'/images',$image_name);

        $data['image'] = $image_name;

        News::create($data);
        return redirect()->back()->with('success_msg',"E'lon muvaffaqiyatli qo'shildi.");
    }

    public function show(News $news)
    {
        //
    }

    public function edit(News $news)
    {
        return view('admin.news-edit',['news'=>$news]);
    }

    public function update(Request $request, News $news)
    {
        $data = $this->validateData();
        $data['image'] = $news->image;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = md5(time()) . "." . $file->extension();
            $file->move(public_path().'/images',$image_name);
            $data['image'] = $image_name;
        }
        $news->update($data);

        return redirect()->back()->with('success_msg',"E'lon ma'lumotlari yangilandi!");
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->back()->with('success_msg',"E'lon o'chirildi!");
    }


    public function validateData()
    {
        return request()->validate([
            'title_uz' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
            'text_uz' => 'required',
            'text_en' => 'required',
            'text_ru' => 'required',
            'date' => 'required',
        ],[
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!"
        ]);
    }
}
