<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abt = About::where('id', 1)->first();
        return view('admin.about.index', compact('abt'));
    }
    public function getcount()
    {
        $s = \App\Service::all();
        $l = \App\License::all();
        $f = \App\Footer::first();
        $c = \App\Contact::first();
        return view('index', compact('s', 'l', 'f', 'c'));
    }
    public function rate()
    {
        $r = \App\Rate::all();
        return view('about', compact('r'));
    }

    public function dk()
    {
        $dk = \App\DaftarKasus::all();
        return view('woncases', compact('dk'));
    }
    public function gallery()
    {
        $g = \App\Gallery::all();
        return view('gallery', compact('g'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $abt = About::find(1);
        $abt->nama = $request->nama;
        $abt->isi1 = $request->isi1;
        $abt->isi2 = $request->isi2;
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            $oldpath = storage_path('picture/about/images/' . $abt->pic);
            if (file_exists($oldpath)) {
                File::delete($oldpath);
            }
            $pic2 = time() . uniqid() . '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('picture/about/images'), $pic2);
            $abt->pic = $pic2;
        }
        $abt->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
