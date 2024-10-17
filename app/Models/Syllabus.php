<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;
    protected $casts = [
        'images' => 'array',
    ];
    public function subcategory(){
        return $this->belongsto(SubCategory::class,'sub_category_id');
    }
}
