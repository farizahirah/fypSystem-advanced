<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class adminControl extends Controller
{
    // public function index()
    // {
    //     return DB::select("select * from students");
    // }

    public function show()
    {
      $output = Student::all(); 
      return view ('admin.projectlist', ['list'=>$output]);
    }

    public function addData(Request $req)
    {
        $output = new Student() ;
        // $output->id();
        $output->projecttype = $req->input('projecttype') ;
        $output->title = $req->input('title') ;
        $output->student = $req->input('student') ;
        $output->supervisor = $req->input('supervisor') ;
        $output->examiner1 = $req->input('examiner1') ;
        $output->examiner2 = $req->input('examiner2') ;
        $output->startdate = $req->input('startdate') ;
        $output->enddate = $req->input('enddate') ;
        $output->duration = $req->input('duration') ;
        $output->progress = $req->input('progress') ;
        $output->status = $req->input('status') ;
        $output->save() ;
        return redirect('projectlist') ;
    }
}
