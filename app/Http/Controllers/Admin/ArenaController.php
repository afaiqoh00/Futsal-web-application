<?php

namespace App\Http\Controllers\Admin;

use App\Models\Arena;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\Admin\ArenaRequest;
use App\Models\Tempat;

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

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        $arena = new Arena;
        $arena->number = $request->number;
        $arena->tempat_id = $request->tempat_id;
        $arena->price = $request->price;
        $arena->image = $fileName;
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
    public function update(ArenaRequest $request,Arena $arena)
    {
        $arena->update($request->validated());

        if ($request->input('photo', false)) {
            if (!$arena->photo || $request->input('photo') !== $arena->photo->file_name) {
                $arena->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($arena->photo) {
            $arena->photo->delete();
        }

        return redirect()->route('admin.arenas.index')->with([
            'message' => 'successfully updated !',
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
