<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class HomeController extends Controller
{
    public function index()
    {
        $instagram = new Instagram('13972092822.1677ed0.4d6fb481bd0c472f8ac074c392e38796');
        // dd($instagram->media());

        return view('index', ['instagram' => $instagram]);
    }
}
