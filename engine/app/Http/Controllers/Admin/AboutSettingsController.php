<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class AboutSettingsController extends Controller
{

    public function index()
    {
        $data['about_first_title'] = Setting::where('key', '=', 'about_first_title')->first()->value;
        $data['about_first_text'] = Setting::where('key', '=', 'about_first_text')->first()->value;

        $data['about_second_title'] = Setting::where('key', '=', 'about_second_title')->first()->value;
        $data['about_second_text'] = Setting::where('key', '=', 'about_second_text')->first()->value;

        return view('admin.about-settings.index', $data);
    }

    public function updateFirstSection(Request $request)
    {
        $input = $request->all();
        unset($input['_token']);
        unset($input['files']);

        $about_first_title = Setting::where('key', '=', 'about_first_title')->first();
        $about_first_title->value = $input['about_first_title'];
        $about_first_title->save();

        $about_first_text = Setting::where('key', '=', 'about_first_text')->first();
        $about_first_text->value = $input['about_first_text'];
        $about_first_text->save();
        
        return redirect('admin/about')->withInfo('First section berhasil diubah!');
    }

    public function updateSecondSection(Request $request)
    {
        $input = $request->all();
        unset($input['_token']);
        unset($input['files']);

        $about_second_title = Setting::where('key', '=', 'about_second_title')->first();
        $about_second_title->value = $input['about_second_title'];
        $about_second_title->save();

        $about_second_text = Setting::where('key', '=', 'about_second_text')->first();
        $about_second_text->value = $input['about_second_text'];
        $about_second_text->save();
        
        return redirect('admin/about')->withInfo('Second section berhasil diubah!');
    }
}
