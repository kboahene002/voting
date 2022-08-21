<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contestant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContestantController extends Controller
{
    public function insertContestant(Request $request , $id){
        $category = Category::find($id);

        if($category != null){

            $rules = array(
                'contestant_name'=>'required',
                'contestant_image'=> 'mimes:png,jpg,jpeg,svg,gif|max:1000'

            );
            $validates = Validator::make($request->all() , $rules);
            if($validates->fails()){
                return (new ResponseController())->Success('validation error' , $validates->errors());
            }


            $imageName = '';
            $image = $request->file('contestant_image');

            if($image){
                $imageName  = $image->getClientOriginalName();
                $image->move('uploads' , $imageName );
            }


           $insert =  $category->contestants()->create([
                'contestant_name'=> $request->contestant_name,
                'contestant_description'=>$request->contestant_description,
                'contestant_image'=>$imageName,
            ]);
           if($insert){
               return (new ResponseController())->Success('Contestant Saved Successfull' , $insert);
           }
        }else{
            return (new ResponseController())->Error('No record in database' , '');
        }

    }

    public function updateContestant(Request $request , $id){
        $contestants = Contestant::find($id);
        $rules = array(
            'contestant_name' => 'required',
            'contestant_image' => 'mimes:jpg,jpeg,png,gif,svg|max:1000'
        );
        $validates = Validator::make($request->all(), $rules);
        if($validates->fails()){
            return (new ResponseController())->Error('Validation error' , $validates->errors());
        }
        $image = $request->file('contestant_image');
        $imageName = '';
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('uploads' , $imageName);
        }

        $result = $contestants->update([
            'contestant_name'=>$request->contestant_name,
            'contestant_description'=>$request->contestant_description,
            'contestant_image'=> $imageName

        ]);
        return (new ResponseController())->Success('Update successfull' , $contestants);

    }

    public function deleteContestant($id){
        $getContestant = Contestant::find($id);
        if($getContestant != null){
            $getContestant->delete();
            return (new ResponseController())->Success('deleted Successfully' , $getContestant->first());
        }else{
            return (new ResponseController())->Success('no result found' , '');
        }
    }
}
