<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

//    Generate Random Password
        public function generateTemporaryPassword(){

        }
    //Student Login
    public function studentLogin(Request $request){
        $student_id = $request->student_id;
        $student_password = $request->student_password;
        $find_student = Student::where('student_id' , $student_id)->first();
        if($find_student != null){
            if(Hash::check($student_password,$find_student->password)) {
                session()->put(['student_id'=> $find_student->student_id]);
                return (new ResponseController())->Success('Login Successfull' , null);
            }else{
                return (new ResponseController())->Success('Credentials do not match' , null);
            }
        }else{
            return (new ResponseController())->Success('No User Found' , null);
        }

    }

    //Student logout
    public function studentLogout(){

    }


    //Block & Unblock student from participating
    public function toggleBlockAndUnblockStudent(Request $request){

    }
}
