<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseController;



use App\Models\Category;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        LETS STORE CATEGORIES
        try {

            $rules = array(
                'category_name'=>'required|unique:categories',
                'category_image'=>'mimes:jpeg,jpg,png,gifs|max:10000');
            $validateInput = Validator::make($request->all() , $rules);

            if($validateInput->fails()){
                return (new ResponseController())->Error('validation error', $validateInput->errors());
            }
//            return $request->all() ;
            $image_name = '';
            $file = $request->file('category_image');
            if($file){
                $image_name = $file->getClientOriginalName();
                $file->move('uploads' , $image_name);
            }


            $insert = new Category();
            $insert['category_name'] = $request->category_name;
            $insert['category_description'] = $request->category_description;
            $insert['category_image'] = $image_name;

            $save = $insert->save() ;

            if($save){
                return (new ResponseController())->Success('Saved successfully' , $insert);
            }

        }catch (Throwable $th){
            return (new ResponseController())->Error('error'  , $th->getMessage());
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //get item to update
        try {
            $rowToUpdate = Category::find($id);
//            return request()->all();
            if($rowToUpdate->count() != 0 ){

                $request->validate([
                    'category_name' => 'required',
                    'category_image'=>'mimes:jpeg,jpg,png,gifs|max:10000'
                ]);

                $rowToUpdate->category_name = $request->category_name ;
                $rowToUpdate->category_description = $request->category_description ;

                if($request->file('category_image')){
                    $image = $request->file('category_image');
                    $image_name = $image->getClientOriginalName();
                    $image->move('uploads' , $image_name );
                    $rowToUpdate->category_image = $image_name ;
                }
                $result = $rowToUpdate->save();
                if($result){
                    return (new ResponseController())->Success('Saved successful',$rowToUpdate);
                }


            }
        }catch (Throwable $th){
            return (new ResponseController())->Error('validation error' , $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE A CATEGORY ;
        $rowToDelete = Category::find($id);
        if($rowToDelete != null){
            $delete = $rowToDelete->delete();
            if($delete){
                return (new ResponseController())->Success('Deleted Successfully', $rowToDelete);
            }
        }else{
            return (new ResponseController())->Success('Nothing to delete', $rowToDelete);
        }
    }

    public function search(Request $request){
        try {

            $keyword = $request->keyword ;
            $request->validate([
                'keyword'=>'required'
            ]);
            $result = Category::where('category_name' , 'like' , '%'.$keyword.'%');
            if($result->count() != 0){
                $count = $result->count()   ;
                return (new ResponseController())->Success( $count , $result->get());
            }else{
                return (new ResponseController())->Success('No data found' , $result->get());
            }


        }catch (Throwable $th){
            return (new ResponseController())->Error('Error' , $th->getMessage());
        }
    }

    public function getAllParticipants($id){
        $category = Category::with('contestants')->where('id',$id)->first() ;
        if($category != null ){
            return (new ResponseController())->Success($category->contestants->count().' contestants  ' , $category);
        }else{
            return (new ResponseController())->Success('no contestant found' , '');
        }

    }

    public function showCat(){
       $categories = Category::all();
       if($categories->count() <= 1){
           return (new ResponseController())->Success($categories->count().'Category', $categories);
       }else{
           return (new ResponseController())->Success($categories->count().'Categories', $categories);
       }

    }




}
