<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function __index()
    {
      return view('home');
    }
}
