<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Doi;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DoiController extends Controller
{

    public function index(Request $request)
    {
        $issue_id = $request->issue;


        $cmp = "=";
        if(is_null($issue_id)) $cmp = '!=';

        $dois = Doi::where('issue_id',$cmp,$issue_id)->orderBy('id','desc')->get();
        return view('admin.dois', [
            'dois' => $dois,
        ]);

    }

    public function create(Request $request)
    {
        $issue_id = intval($request->issue);
        $issues = Issue::all();

        $articles = Article::where('status','=','accepted')->get();
        return view('admin.doi-create',[
            'issue_id' => $issue_id,
            'issues' => $issues,
//            'articles' => $articles,
        ]);
    }


    public function store(Request $request)
    {
        $data = $this->validateData();
        $file_name = Str::random(20) . time() . "doi.pdf";

        $ff = $request->file('doi_file')->storeAs('dois',$file_name);
        $doi = new Doi();
        $doi->issue_id = $data['issue_id'];
        $doi->title = $data['title'];
        $doi->authors = $data['authors'];
        $doi->abstract = $data['abstract'];
        $doi->keywords = $data['keywords'];
        if(!empty($data['doi_url'])) $doi->doi_url = $data['doi_url'];
        $doi->doi_file = $file_name;
        $doi->save();

        return redirect()->back()->with('success_msg',"Jurnal soni muvaffaqiyatli qo'shildi!");
    }

    public function download($file){
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Storage::download('dois/'.$file,$file,$headers);
    }


    public function edit(Doi $doi)
    {
        //
    }


    public function update(Request $request, Doi $doi)
    {
        //
    }

    public function destroy(Doi $doi)
    {
        $doi->delete();
        return redirect()->back()->with('success_msg',"Arxivdan maqola o'chirildi!");

    }

    public function validateData()
    {
        return request()->validate([
            'issue_id' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'authors' => 'required',
            'keywords' => 'required',
            'doi_file' => 'required|file|mimetypes:application/pdf',
        ],[
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!"
        ]);
    }
}
