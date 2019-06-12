<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicektController extends Controller
{
    public function create()
    {
       return view('user.create');
    }
}
