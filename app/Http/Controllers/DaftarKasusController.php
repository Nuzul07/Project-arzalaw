<?php

namespace App\Http\Controllers;

use App\DaftarKasus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DaftarKasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dk = DaftarKasus::all();
        return view('admin.dk.index', compact('dk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dk = new DaftarKasus;
        $dk->nama = $request->nama;
        $dk->judul = $request->judul;
        $dk->tgl = $request->tgl;
        $dk->hasil = $request->hasil;
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            $pic2 = time() . uniqid() . '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('picture/dk/images'), $pic2);
            $dk->pic = $pic2;
        }
        $dk->save();
        return redirect(url('zraw-&&&-admin/dk'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DaftarKasus  $daftarKasus
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarKasus $daftarKasus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DaftarKasus  $daftarKasus
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarKasus $daftarKasus, $id)
    {
        $dk = DaftarKasus::find($id);
        return view('admin.dk.edit', compact('dk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DaftarKasus  $daftarKasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarKasus $daftarKasus)
    {
        $dk = DaftarKasus::find($request->id);
        $dk->nama = $request->nama;
        $dk->judul = $request->judul;
        $dk->tgl = $request->tgl;
        $dk->hasil = $request->hasil;
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            $oldpath = storage_path('picture/dk/images/' . $dk->pic);
            if (file_exists($oldpath)) {
                File::delete($oldpath);
            }
            $pic2 = time() . uniqid() . '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('picture/dk/images'), $pic2);
            $dk->pic = $pic2;
        }
        $dk->save();
        return redirect(url('zraw-&&&-admin/dk'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DaftarKasus  $daftarKasus
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarKasus $daftarKasus, $id)
    {
        $att = DaftarKasus::find($id);
        if (file_exists(storage_path('picture/dk/images/' . $att->pic))) {
            File::delete(storage_path('picture/dk/images/' . $att->pic));
        }
        $att->delete();
        return redirect(url('zraw-&&&-admin/dk'));
    }
}
