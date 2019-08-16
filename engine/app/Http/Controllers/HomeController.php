<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class HomeController extends Controller
{
    public function index()
    {
        $instagram = new Instagram(env('IG_ACCESS_TOKEN'));

        $supported_image = array(
            'jpg',
            'jpeg',
            'png'
        );

        // $src_file_name = 'abskwlfd.PNG';
        // $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
        // if (in_array($ext, $supported_image)) {
        //     echo "it's image";
        // } else {
        //     echo 'not image';
        // }

        $slide_collection = Setting::where('key', 'like', 'slide_%')->get();
        $sliders = [];
        $i = 0;
        foreach ($slide_collection as $key => $slide) {
            $ext = strtolower(pathinfo($slide->value, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_image)) {
                $sliders[$i]['image'] = $slide->value;
            } else {
                $sliders[$i]['text'] = $slide->value;
                $i++;
            }
        }

        // dd($sliders);
        // $images = $slide_collection->map(function ($item, $key) use ($supported_image) {
        //     // dd($key);
        //     $data = [];
        //     $ext = strtolower(pathinfo($item['value'], PATHINFO_EXTENSION));
        //     if (in_array($ext, $supported_image)) {
        //         $data['image'] = $item->value;
        //         // $data[]['text'] = $item->value;
        //     } else {
        //         $data['text'] = $item->value;
        //     }
        //     // }

        //     return $data;
        // });

        // dd($images);

        return view('index', compact('instagram', 'sliders'));
    }
}
