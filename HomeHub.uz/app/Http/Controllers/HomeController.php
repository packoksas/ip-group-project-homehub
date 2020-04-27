<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('Index');
    }
    public function list(){
        return view('List');
    }
    public function reg(){
        return view('Registration');
    }
    public function about_us(){
        return view('AboutUs');
    }
    public function Author_list(){
        return view('Author_List');
    }
}
