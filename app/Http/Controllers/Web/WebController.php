<?php

namespace PauloCoelho\Http\Controllers\Web;

use Illuminate\Http\Request;
use PauloCoelho\Http\Controllers\Controller;

class WebController extends Controller
{
    public function home()
    {
        return view('web.home');
    }
}
