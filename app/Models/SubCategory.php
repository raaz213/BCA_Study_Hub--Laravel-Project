<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'images' => 'array',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function chapters(){
        return $this->hasMany(Chapters::class,'sub_category_id');
    }
    public function products(){
        return $this->hasMany(Product::class,'sub_category_id');
    }
    public function syllabus(){
        return $this->hasMany(Syllabus::class,'sub_category_id');
    }
    public function years(){
        return $this->hasMany(Years::class,'sub_category_id');
    }
    public function questions(){
        return $this->hasMany(Question::class,'sub_category_id');
    }
}
