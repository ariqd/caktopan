<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SliderController extends Controller
{
    public function index()
    {
        $slides = Setting::where('key', 'like', 'slide_%')->get();

        $data = $slides->mapWithKeys(function ($item) {
            return [$item['key'] => $item['value']];
        });

        return view('admin.slider-settings.index', $data);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        for ($i = 1; $i <= 5; $i++) {
            if ($request->has('slide_' . $i . '_image'))
                $this->updateSlider($i, $input['slide_' . $i . '_image']);

            if ($request->has('slide_' . $i . '_text'))
                $this->updateText($i, $input['slide_' . $i . '_text']);
        }

        return redirect()->back()->withInfo('Slider berhasil diupdate');
    }

    private function updateSlider($no, $image)
    {
        $currentImage = Setting::where('key', '=', 'slide_' . $no . '_image')->first();
        $imageUpload = 'slide-' . $no . $this->generateRandomString() . date("dmy") . "." . $image->getClientOriginalExtension();
        $image->move("uploads/sliders", $imageUpload);
        $currentImage->value = $imageUpload;
        $currentImage->save();
    }

    private function updateText($no, $text)
    {
        $currentText = Setting::where('key', '=', 'slide_' . $no . '_text')->first();
        if ($text != $currentText) {
            $currentText->value = $text;
            $currentText->save();
        }
    }
}
