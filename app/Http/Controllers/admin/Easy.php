<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\web;
use App\Models\webook;

class Easy extends Controller
{
    public function webook()
    {
        $web=web::all();
        return view('admin/look', compact('web'));
    }



}
