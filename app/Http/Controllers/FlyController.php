<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlyController extends Controller
{
    public function create()
    {
        return view('admin.flies.create');
    }
}
