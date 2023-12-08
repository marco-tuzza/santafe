<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submenu;

class MenuController extends Controller
{
    public function index()
    {
        $submenus = Submenu::with('categories')->get();
        return view('pages/menu', compact('submenus'));
    }
}
