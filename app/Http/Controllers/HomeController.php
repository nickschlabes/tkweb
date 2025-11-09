<?php

namespace App\Http\Controllers;

use App\Models\Vorstand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $vorstandMembers = Vorstand::orderBy('order')->get();
        return view('home', compact('vorstandMembers'));
    }
}
