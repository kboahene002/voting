<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StudentsController extends Controller
{
    public function addStudents(Request $request){
        try {
            $student = new Student();
            //CHECK FOR VALIDATION
            $rules = array(
                'student_id'=>'required|unique:students'
            );
            $validates = Validator::make($request->all() , $rules);
            if($validates->fails()){
                return (new ResponseController())->Error('Validation error' , $validates->errors());
            }
            $student['student_id'] = $request->student_id;
            $student['student_class'] = $request->student_class;
            $student['student_course'] = $request->student_course;

            $insert = $student->save();
            if($insert){
                return (new ResponseController())->Success('Student Saved Successfully' , $student);
            }


        }catch(Throwable $th){
            return (new ResponseController())->Error('Error' , $th->getMessage());
        }

    }

    //Block student for participating

}
