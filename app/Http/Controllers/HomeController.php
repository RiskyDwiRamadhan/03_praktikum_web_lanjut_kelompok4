<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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
        $menu = Menu::all();
        return view ('menu', ['data' => $menu], ['title' => 'Menu Cofe']);
    }
    
    public function today(){
        return view('spesial', ['title' => 'Today Spesial']);
    }
}
