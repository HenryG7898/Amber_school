<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        return view('admin-view.editstudent');
    }

    public function updatestudent(Request $request){
        $validate = $request->validate([
            'First_nm' =>['required','string'],
            'Last_nm' =>['required','string'],
            'Class' =>['required','string'],
            'Gender' =>['required','string'],
            'DOB' =>['required'],
            'Phone_nb' =>['required','string','numeric',],
            'Email' =>['required','string','email'],
        ]);

        $cus = new Student();
        $data = $cus->find($request->id);
        if ($data) {


            $data->first_nm = $request->first_nm;
            $data->last_nm = $request->last_nm;
            $data->email = $request->email;
            $data->gender = $request->gender;
            $data->DOB = $request->DOB;
            $data->save();
        }
        return redirect('/');
    }

    public function Edit($id){
        $cus = new User();
        $data = $cus->find($id);

        return view('admin-view.editstudent',['data'=>$data]);
    }

}
