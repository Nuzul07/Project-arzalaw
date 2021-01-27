<?php

namespace App\Http\Controllers;

use App\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l = License::all();
        return view('admin.license.index', compact('l'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.license.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $l = new License;
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            $oldpath = storage_path('picture/license/images/' . $l->pic);
            if (file_exists($oldpath)) {
                File::delete($oldpath);
            }
            $pic2 = time() . uniqid() . '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('picture/license/images'), $pic2);
            $l->pic = $pic2;
        }
        $l->save();
        return redirect(url('zraw-&&&-admin/license'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function show(License $license)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function edit(License $license)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, License $license)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\License  $license
     * @return \Illuminate\Http\Response
     */
    public function destroy(License $license, $id)
    {
        $l = License::find($id);
        if (file_exists(storage_path('picture/license/images/' . $l->pic))) {
            unlink(storage_path('picture/license/images/' . $l->pic));
        }
        $l->delete();
        return redirect(url('zraw-&&&-admin/license'));
    }
}
