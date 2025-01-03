<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swimming extends Model
{
    // use HasFactory;
    protected $table = 'swims';
    protected $fillable = [
        'id',
        'name',
        'age',
        'gender',
        'tel',
        'week1',
        'week2',
        'week3',
        'course',
        'comment'
    ];
}