<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index(){
        return "Hello world!!! :-)";
    }

    public function home(){
        return "This is main page";
    }

    public function products(){
        return "<h1>products list:</h1>";
    }
}