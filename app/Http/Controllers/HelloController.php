<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return "建物です";
    }
    public function number($number)
    {
        return "部屋番号は".$number."です";
    }
     
}
