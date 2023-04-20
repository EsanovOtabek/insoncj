<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{

    public function index()
    {
        $years = Year::all();
        return view('admin.years',[
            'years' => $years
        ]);
    }


    public function store(Request $request)
    {
        Year::create($this->validateData());
        return redirect()->back()->with('success_msg',"Jurnal yili muvaffaqiyatli qo'shildi!");

    }


    public function update(Request $request, Year $year)
    {

    }


    public function destroy(Year $year)
    {
        $year->delete();
        return redirect()->back()->with('success_msg', "Jurnal yili o'chirildi!");

    }

    public function validateData()
    {
        return request()->validate([
            'year' => 'required',
        ],[
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!"
        ]);
    }
}
