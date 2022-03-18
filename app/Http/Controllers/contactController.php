<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class contactController extends Controller
{
    public function index(){
        return view('contacts');
    }

}