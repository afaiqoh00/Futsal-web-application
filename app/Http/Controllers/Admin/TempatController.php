<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tempat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;


class TempatController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Tempat::all();

        return view('admin.tempats.tempat', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tempats = Tempat::all();
        return view('admin.tempats.create', compact('tempats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extention;
            $file->move('images/tempat/', $filename);
            
        }
        $data = $request->all();
        $tempat = new Tempat;
        $tempat->name = $data['tempat'];
        $tempat->image = $filename;
        $tempat->operator = $request->operator;
        $tempat->maps = $request->maps;
        $tempat->tutup = $request->tutup;
        $tempat->waa = $request->waa;
        $tempat->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function show(Tempat $tempat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function edit(Tempat $id)
    {
        $tempat = Tempat::find($id);
        return view('tempat.edit', compact('tempats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tempat $tempat)
    {
        // dd($request->all(),$tempat);
        // $id = $tempat-

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function massDestroy(Request $request)
    {
        Tempat::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
