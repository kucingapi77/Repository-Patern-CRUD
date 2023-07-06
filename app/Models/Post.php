<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * the attributes that are mass assignable
     * @var array
     */

    protected $fillable =[
        'title',
        'description'
    ];

    /**
     * the attributes that are mass assignable
     * @var array
     */


    protected $hidden=[
        'created_at',
        'updated_at'
    ];


}
