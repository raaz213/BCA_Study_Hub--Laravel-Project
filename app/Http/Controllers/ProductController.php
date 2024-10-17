<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chapters;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('notes.category',compact('categories'));
    }
    public function subcategory($categoryId){
        $category = Category::find($categoryId);
        $subcategories = $category->subcategory;
        return view('notes.subcategory',compact('category','subcategories'));
    }
    public function chapters($subcategoryId){
        $subcategory = SubCategory::find($subcategoryId);
        $chapters = $subcategory->chapters;
        return view('notes.chapters',compact('subcategory','chapters'));
    }
    public function products($chapterId){
        $chapters = Chapters::find($chapterId);
        $products = $chapters->products;
        return view('notes.notes',compact('chapters','products'));
    }
}
