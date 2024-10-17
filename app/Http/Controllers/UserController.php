<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chapters;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Syllabus;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userInfo(){
        return view('userinfo');
    }
   public function search(Request $request){
        $search = $request->search;
        $categories = Category::where('name','LIKE',"%{$search}%")->get();
        $products = Product::where('name','LIKE',"%{$search}%")->get();
        $syllabus = Syllabus::where('name','LIKE',"%{$search}%")->get();
        $chapters = Chapters::where('name','LIKE',"%{$search}%")->get();

        return view('search',compact('search','categories','products','syllabus','chapters'));
   }
}

