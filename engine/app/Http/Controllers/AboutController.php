<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Mapper;

class AboutController extends Controller
{
    public function index()
    {
        // $map = Mapper::marker(0.4916589, 101.4538533);
        // $map = Mapper::map(53.381128999999990000, -1.470085000000040000);
        // dd($map);
        
        $data['about_first_title'] = Setting::where('key', '=', 'about_first_title')->first()->value;
        $data['about_first_text'] = Setting::where('key', '=', 'about_first_text')->first()->value;

        $data['about_second_title'] = Setting::where('key', '=', 'about_second_title')->first()->value;
        $data['about_second_text'] = Setting::where('key', '=', 'about_second_text')->first()->value;

        return view('about.index', $data);
    }
}
