<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    use HasFactory;
    protected $casts = [
        'images' => 'array',
    ];
    public function subcategory(){
        return $this->belongsto(SubCategory::class,'sub_category_id');
    }
    public function products(){
        return $this->hasMany(Product::class,'chapters_id');
    }
}
