<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home', ['title' => 'Home Cofe House']);
    }
    
    public function contact(){
        return view('contact', ['title' => 'Contact']);
    }
    
    public function menu(){
        return view('menu', ['title' => 'Menu Utama']);
    }
    
    public function today(){
        return view('spesial', ['title' => 'Today Spesial']);
    }
}
