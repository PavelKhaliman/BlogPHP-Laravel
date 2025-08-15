<?php

namespace App\Http\Controllers\MyProject;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('myproject.index');
    }
}


