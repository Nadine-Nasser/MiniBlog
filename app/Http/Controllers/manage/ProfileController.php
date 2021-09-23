<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\StoreProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('manage.pages.Single.profile');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProfileRequest $request)
    {
        if ($request->hasFile('image'))
        {
            if (Storage::exists('public/profile/' . auth()->user()->profile->image)) {
                Storage::delete('public/profile/' . auth()->user()->profile->image);
            }
            $imag_name = time().'_'.$request->file('image')->getClientOriginalName();// inside the varibale image_name put the time the image is stored in the database withe the 'image name and the extension'(getclientoriginalname)->12/7/2019_x.jpg
            $request->file('image')->storeAs('profile',$imag_name,'public');
            $path = Storage::url('profile/' . $imag_name);
        }

        auth()->user()->profile->update([
            'information' => $request->information,
            'image' => $path ?? auth()->user()->profile->image,// keep the image if no image is inserted
        ]);

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
