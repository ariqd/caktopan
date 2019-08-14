<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

class AboutController extends Controller
{
    public function index()
    {
        // $map = Mapper::marker(0.4916589, 101.4538533);
        $map = Mapper::map(53.381128999999990000, -1.470085000000040000);
        // dd($map);

        return view('about.index', compact('map'));
    }
}
