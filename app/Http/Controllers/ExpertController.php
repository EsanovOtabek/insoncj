<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        return view('admin.experts',[
            'experts'=>Expert::all(),
        ]);
    }

    public function create()
    {
        return view('admin.expert-create');
    }

    public function store(Request $request)
    {
        $data = $this->validateData();
        $file = $request->file('image');
        $image_name = md5(time()) . "." . $file->extension();
        $file->move(public_path().'/images/experts',$image_name);

        $data['image'] = $image_name;

        Expert::create($data);
        return redirect()->back()->with('success_msg',"Expert muvaffaqiyatli qo'shildi.");

    }

    public function edit(Expert $expert)
    {
        return view('admin.expert-edit',[
            'expert'=>$expert,
        ]);
    }


    public function update(Request $request, Expert $expert)
    {
        $data = $this->validateData();
        $data['image'] = $expert->image;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = md5(time()) . "." . $file->extension();
            $file->move(public_path().'/images/experts',$image_name);
            $data['image'] = $image_name;
        }
        $expert->update($data);

        return redirect()->back()->with('success_msg',"Expert ma'lumotlari yangilandi!");

    }


    public function destroy(Expert $expert)
    {
        $expert->delete();
        return redirect()->back()->with('success_msg',"Expert o'chirildi!");

    }

    public function validateData()
    {
        return request()->validate([
            'fio' => 'required',
            'lavozim' => 'required',
            'ishjoyi' => 'required',
        ],[
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!"
        ]);
    }
}
