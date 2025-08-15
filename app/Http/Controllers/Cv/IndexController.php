<?php

namespace App\Http\Controllers\Cv;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('cv.index');
    }
}


