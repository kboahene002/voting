<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show_dashboard(){
         $categories['categories'] = Category::all();
        return view('dashboard')->with($categories);
    }
}
