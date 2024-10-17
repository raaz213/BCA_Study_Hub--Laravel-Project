<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $casts = [
        'images' => 'array',
    ];
    public function years(){
        return $this->belongsto(Years::class,'years_id');
    }
    public function subcategory(){
        return $this->belongsto(SubCategory::class,'sub_category_id');
    }
}
