<?php

namespace App\Http\Controllers;

class BuilderController extends Controller
{
    public function index() {
        return view('builder.index');
    }

    public function register() {
        return view('builder.register');
    }
}
