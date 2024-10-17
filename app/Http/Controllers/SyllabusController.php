<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Syllabus;
use Illuminate\Http\Request;



class SyllabusController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('syllabus.category',compact('categories'));
    }
    public function subcategory($categoryId){
        $category = Category::find($categoryId);
        $subcategories = $category->subcategory;
        return view('syllabus.subcategory',compact('category','subcategories'));
    }
    public function syllabus($subcategoryId){
        $subcategory = SubCategory::find($subcategoryId);
        $syllabus = $subcategory->syllabus;
        return view('syllabus.syllabus',compact('subcategory','syllabus'));
    }
  
}
