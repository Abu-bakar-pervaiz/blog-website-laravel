<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        
        return view('home');
        
    }
    public function test(){
        
        return view('layouts.admin.app');
        
    }
    public function about($name=null){
        return view('about',compact('name'));
    }
}