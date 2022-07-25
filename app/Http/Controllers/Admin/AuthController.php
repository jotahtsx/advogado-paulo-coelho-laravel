<?php

namespace PauloCoelho\Http\Controllers\Admin;

use Illuminate\Http\Request;
use PauloCoelho\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.index');
    }

    public function home()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = "Oops, informe todos os dados para continuar";
            return response()->json($json);
        }
        var_dump($request->all());
    }
}
