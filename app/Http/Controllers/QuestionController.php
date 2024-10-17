<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use App\Models\SubCategory;
use App\Models\Years;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('questions.category',compact('categories'));
    }
    public function subcategory($categoryId){
        $category = Category::find($categoryId);
        $subcategories = $category->subcategory;
        return view('questions.subcategory',compact('category','subcategories'));
    }
    public function years($subcategoryId){
        $subcategory = SubCategory::find($subcategoryId);
        $years = $subcategory->years;
        return view('questions.years',compact('subcategory','years'));
    }
    public function questions($yearId){
        $years = Years::find($yearId);
        $questions = $years->questions;
        return view('questions.questions',compact('years','questions'));
    }
}
