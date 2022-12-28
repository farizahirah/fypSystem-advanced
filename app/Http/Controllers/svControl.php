<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class svControl extends Controller
{
    public function show()
    {
      $output = Student::all(); 
      return view ('supervisor.projectlist', ['list'=>$output]);
    }

    function showStud($id){
        $data=Student::find($id);

        return view('supervisor.updateproject',['disp'=>$data]);
    }

    function update(Request $req){
        $data=Student::find($req->id);
        $data->projecttype = $req->projecttype;
        $data->title = $req->title;
        $data->student = $req->student;
        $data->supervisor = $req->supervisor;
        $data->examiner1 = $req->examiner1;
        $data->examiner2 = $req->examiner2;
        $data->startdate = $req->startdate;
        $data->enddate = $req->enddate;
        $data->duration = $req->duration;
        $data->progress = $req->progress;
        $data->status = $req->status;
        $data->save() ;
        return redirect('svprojectlist') ;
    }
}
