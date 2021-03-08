<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Posts extends Controller
{
    protected $fillable = [
        'name','course','age','status','previous_job'
    ];
}
