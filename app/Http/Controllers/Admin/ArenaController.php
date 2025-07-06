<?php

namespace App\Http\Controllers\Admin;

use App\Models\Arena;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\Admin\ArenaRequest;
use App\Models\Tempat;
use Illuminate\Support\Facedes\File;
class ArenaController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arenas = Arena::with('tempats')->get();

        return view('admin.arenas.index', compact('arenas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tempats = Tempat::all();
        return view('admin.arenas.create', compact('tempats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArenaRequest $request)
    {

        if($request->file('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extention;
            $file->move('images/arena/', $filename);
            
        }

        // $request->image->storeAs('public/images', $fileName);
        $arena = new Arena;
        $arena->number = $request->number;
        $arena->tempat_id = $request->tempat_id;
        $arena->price = $request->price;
        $arena->image = $filename;
        $arena->status = $request->status;
        $arena->save();
        // $user = new User;
        // if ($request->input('photo', false)) {
        //     $arena->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        // }

        return redirect()->route('admin.arenas.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Arena $arena)
    {
        return view('admin.arenas.show', compact('arena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Arena $arena)
    {
        return view('admin.arenas.edit', compact('arena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArenaRequest $request, $id)
    {
        
        $arena = Arena::find($id);
        if($request->file('image'))
        {
            $destination = 'images/arena/'. $arena->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extention;
            $file->move('images/arena/', $filename);
            $arena->image = $filename;
            
        }
        // $request->image->storeAs('public/images', $fileName);
        $arena = new Arena;
        $arena->number = $request->number;
        $arena->tempat_id = $request->tempat_id;
        $arena->price = $request->price;
       
        $arena->status = $request->status;
        $arena->update();
dd($arena);
        return redirect()->route('admin.arenas.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arena $arena)
    {
        $arena->delete();

        return redirect()->route('admin.arenas.index')->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        Arena::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
