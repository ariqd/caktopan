<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')->get();

        return view('admin.blog-settings.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog-settings.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        unset($input['_token']);
        unset($input['files']);

        $input['slug'] = str_slug($input['title']);

        if (!$request->has('image')) {
            return redirect()->back()->with('error', 'Gambar belum dipilih!')->withInput();
        }
        $value = $input['image'];
        $imageUpload = $request->title . $this->generateRandomString() . date("dmy") . "." . $value->getClientOriginalExtension();
        $value->move("uploads/blog/thumbs/", $imageUpload);
        $input['image'] = $imageUpload;

        $detail = $request->input('content');
        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name = "uploads/blog/" . $request->title . time() . $k . '.png';
            $path = base_path() . '/../' . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', env('APP_URL') . '/' . $image_name);
        }

        $detail = $dom->saveHTML();
        $input['content'] = $detail;

        $blog = Blog::create($input);

        return redirect('admin/blog/create')->withInfo('Blog berjudul ' . $blog->title . ' berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $data['blog'] = $blog;
        $data['edit'] = TRUE;

        return view('admin.blog-settings.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $input = $request->all();
        unset($input['_token']);
        unset($input['files']);

        $blog->title = $input['title'];
        $blog->content_short = $input['content_short'];
        $blog->slug = str_slug($input['title']);

        if ($request->has('image')) {
            $value = $input['image'];
            $imageUpload = $request->title . $this->generateRandomString() . date("dmy") . "." . $value->getClientOriginalExtension();
            $value->move("uploads/blog/thumbs/", $imageUpload);
            $blog->image = $imageUpload;
        }

        $detail = $request->input('content');
        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name = "uploads/blog/" . $request->title . time() . $k . '.png';
            $path = base_path() . '/../' . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', env('APP_URL') . '/' . $image_name);
        }

        $detail = $dom->saveHTML();
        $blog->content = $detail;

        $blog->save();

        return redirect('admin/blog')->withInfo('Blog berjudul ' . $blog->title . ' berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->back()->with("info", "Data dihapus");
    }
}
