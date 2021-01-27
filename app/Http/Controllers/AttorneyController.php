<?php

namespace App\Http\Controllers;

use App\Attorney;
use Illuminate\Http\Request;

class AttorneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $att = Attorney::all();
        return  view('admin.attorney.index', compact('att'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attorney.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $att = new Attorney();
        $att->nama = $request->nama;
        $att->jabatan = $request->jabatan;
        $att->pengantar = $request->pengantar;
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            $pic2 = time() . uniqid() . '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('picture/attorney/images'), $pic2);
            $att->pic = $pic2;
        }
        $att->save();
        return redirect(url('zraw-&&&-admin/attorney'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attorney  $attorney
     * @return \Illuminate\Http\Response
     */
    public function show(Attorney $attorney)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attorney  $attorney
     * @return \Illuminate\Http\Response
     */
    public function edit(Attorney $attorney, $id)
    {
        $att = Attorney::find($id);
        return view('admin.attorney.edit', compact('att'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attorney  $attorney
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attorney $attorney)
    {
        $att = Attorney::find($request->id);
        $att->nama = $request->nama;
        $att->jabatan = $request->jabatan;
        $att->pengantar = $request->pengantar;
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            $oldpath = storage_path('picture/attorney/images/' . $att->pic);
            if (file_exists($oldpath)) {
                unlink($oldpath);
            }
            $pic2 = time() . uniqid() . '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('picture/attorney/images'), $pic2);
            $att->pic = $pic2;
        }
        $att->save();
        return redirect(url('zraw-&&&-admin/attorney'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attorney  $attorney
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attorney $attorney, $id)
    {
        $att = Attorney::find($id);
        if (file_exists(storage_path('picture/attorney/images/' . $att->pic))) {
            unlink(storage_path('picture/attorney/images/' . $att->pic));
        }
        $att->delete();
        return redirect(url('zraw-&&&-admin/attorney'));
    }
}
