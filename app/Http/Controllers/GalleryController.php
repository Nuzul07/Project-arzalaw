<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g = Gallery::all();
        return view('admin.gallery.index', compact('g'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            foreach ($pic as $p) {
                $pic2 = time() . uniqid() . '.' . $p->getClientOriginalExtension();
                $p->move(storage_path('picture/gallery/images'), $pic2);
                Gallery::create([
                    'pic' => $pic2
                ]);
            }
        }
        return redirect(url('zraw-&&&-admin/gallery'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery, $id)
    {
        $g = Gallery::find($id);
        if (file_exists(storage_path('picture/gallery/images/' . $g->pic))) {
            unlink(storage_path('picture/gallery/images/' . $g->pic));
        }
        $g->delete();
        return redirect(url('zraw-&&&-admin/gallery'));
    }
}
