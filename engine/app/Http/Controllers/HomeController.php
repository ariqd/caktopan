<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class HomeController extends Controller
{
    public function index()
    {
        $instagram = new Instagram(env('IG_ACCESS_TOKEN'));

        return view('index', compact('instagram'));
    }
}
