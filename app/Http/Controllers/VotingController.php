<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    //FROM CATEGORIES SHOW ALL VOTTERS
    public function ShowContestantByCategory(){

        $allCategory = Category::with('contestants')->get();
        return view('new' , compact('allCategory'));

    }
}
