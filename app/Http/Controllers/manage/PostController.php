<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = Post::with('category')->get();

       return view('manage.pages.Post.post', compact(['posts']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.pages.Post.createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
         if ($request->hasFile('image')) {
            $imag_name = time().'_'.$request->file('image')->getClientOriginalName();// inside the varibale image_name put the time the image is stored in the database withe the 'image name and the extension'(getclientoriginalname)->12/7/2019_x.jpg
            $request->file('image')->storeAs('folder',$imag_name,'public');// get the image and store it on the VS insdie the folder in the public
            $path = Storage::url('folder/' . $imag_name);
         }
         $post = Post::create($request->validated() + [
             'image' => $path ?? null,
             'user_id' => Auth::id(),
         ]);
         $tags = explode(',',$request->tags);// take the tags inside the text box and split them according to the ','

         foreach($tags as $tagname)
        {
            $tag = Tag::firstOrCreate(['name'=>$tagname]);  // $tag = 'sport
            $post->tags()->attach($tag);// byrbot l tags ma3 l articles => every article has many tags and every tag has many article

        }
        return back();
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

    public function edit(Post $post)
    {
        //dd($post);
        return view('manage.pages.Post.editpost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if ($request->hasFile('image'))
        {
            Storage::delete('public/folder/' . $post->image);
            $imag_name = time().'_'.$request->file('image')->getClientOriginalName();// inside the varibale image_name put the time the image is stored in the database withe the 'image name and the extension'(getclientoriginalname)->12/7/2019_x.jpg
            $request->file('image')->storeAs('folder',$imag_name,'public');
            $path = Storage::url('folder/' . $imag_name);
        }

        $post = Post::update($request->validated() + [
            'image' => $path ?? null,
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image)
        {
            Storage::delete('public/folder/' . $post->image);
        }
        $post->delete();
        return back();
    }
}
