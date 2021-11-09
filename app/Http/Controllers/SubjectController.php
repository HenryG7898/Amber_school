<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function view(){
        return view('admin-view.editsubject');
    }

//    public function show(){
//        $users = Subject::paginate(3);
//        return view('subject',compact('users'));
//    }

    public function Editsubject($id){
        $cus = new Subject();
        $data = $cus->find($id);

        return view('admin-view.editsubject',['data'=>$data]);
    }

    public function updatesubject(Request $request){
        $qual = new Subject();
        $data = $qual->find($request->id);
        if ($data) {
            $data->subject_nm = $request->subject_nm;
            $data->save();
        }
        return redirect('admin-view.dashboard');
    }
}
