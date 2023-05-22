<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Year;
use Hamcrest\Core\Is;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IssueController extends Controller
{

    public function index(Request $request)
    {
        $year = $request->year;

        $cmp = "=";
        if(is_null($year)) $cmp = "!=";

        $issues = Issue::where('issues.yil',$cmp,$year)->get();

        return view('admin.issues',[
            'this_year' => $year,
            'years' =>  Year::all(),
            'issues' => $issues,
        ]);
    }

    public function store(Request $request)
    {
        $this->validateData();
        $issue = $request->number;
        $year = (Year::find($request->year_id) )->year;
        $file_name = $year . "_yil_".$issue."_son.pdf";
        $ff = $request->file('file')->storeAs('journals',$file_name);


        $image = $request->file('image');
        $image_name = md5(time()) . "." . $image->extension();
        $image->move(public_path().'/images/journals',$image_name);

        $data['image'] = $image_name;

        //===========================\\
        $issue = new Issue();
        $issue->number = $request->number;
        $issue->year_id = $request->year_id;
        $issue->yil = (Year::find($issue->year_id))['year'];
        $issue->file = $file_name;
        $issue->image = $image_name;
        $issue->save();
        return redirect()->back()->with('success_msg',"Jurnal soni muvaffaqiyatli qo'shildi!");
    }

    public function update(Request $request, Issue $issue)
    {
        //
    }

    public function journalDownload($file){
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Storage::download('journals/'.$file,$file,$headers);
    }

    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect()->back()->with('success_msg',"Jurnal soni o'chirildi!");
    }

    public function validateData()
    {
        return request()->validate([
            'number' => 'required',
            'year_id' => 'required',
            'file' => 'required|file|mimetypes:application/pdf',
        ],[
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!"
        ]);
    }
}
