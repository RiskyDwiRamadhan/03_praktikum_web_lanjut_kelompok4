<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        $menu = Menu::all();
        return view ('menu', ['data' => $menu], ['title' => 'Menu Cofe']);
    }
}
