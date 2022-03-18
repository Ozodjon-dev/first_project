<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class mainController extends Controller
{

    public function index(){
        return view('main');
    }

}