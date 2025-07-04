<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function fiksi()
    {
        return view('layouts.Fiksi');
    }
    public function nonfiksi()
    {
        return view('layouts.NonFiksi');
    }
}
