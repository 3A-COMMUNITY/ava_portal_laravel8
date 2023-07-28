<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_birth',
        'n_bi',
        'adress',
        'email',
        'phone',
        'image',
        'areas_afectadas',
        'status'
    ];
}
