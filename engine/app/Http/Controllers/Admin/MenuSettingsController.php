<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;

class MenuSettingsController extends Controller
{
    public function index()
    {
        $data['paket_menus'] = Menu::paket()->get();
        $data['sambal_menus'] = Menu::sambal()->get();
        $data['express_menus'] = Menu::express()->get();

        return view('admin.menu-settings.index', $data);
    }

    public function create()
    {
        $data['categories'] = [
            'Paket',
            'Sambal',
            'Express'
        ];

        return view('admin.menu-settings.form', $data);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        unset($input["_token"]);

        if (!$request->has('image')) {
            return redirect()->back()->with('error', 'Gambar belum dipilih!')->withInput();
        }

        $value = $input['image'];
        $imageUpload = $request->name . $this->generateRandomString() . date("dmy") . "." . $value->getClientOriginalExtension();
        $value->move("uploads/menus", $imageUpload);
        $input['image'] = $imageUpload;

        $data = Menu::create($input);

        return redirect()->back()->with("info", "Menu '$data->name' berhasil dibuat");
    }

    public function edit(Menu $menu)
    {
        $data['categories'] = [
            'Paket',
            'Sambal',
            'Express'
        ];
        $data['menu'] = $menu;
        $data['edit'] = TRUE;

        return view('admin.menu-settings.form', $data);
    }

    public function update(Request $request, Menu $menu)
    {
        $input = $request->all();
        unset($input["_token"]);
        unset($input["_method"]);

        if ($request->has('image')) {
            $value = $input['image'];
            $imageUpload = $request->name . $this->generateRandomString() . date("dmy") . "." . $value->getClientOriginalExtension();
            $value->move("uploads/menus", $imageUpload);
            $input['image'] = $imageUpload;
        }

        foreach ($input as $key => $value) {
            $menu->$key = $value;
        }
        $menu->save();

        return redirect()->back()->with("info", "Menu '$menu->name' berhasil diubah");
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->back()->with("info", "Data dihapus");
    }
}
