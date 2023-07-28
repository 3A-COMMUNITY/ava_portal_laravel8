<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'category_id',
        'description',
        'status'
    ];

    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class,'category_id');
    }
}
