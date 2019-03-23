<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

    public function home(){
        return view('vueApp');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::orderBy('id','DESC')->get();
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
        $this->validate($request,
            [
                'title' => 'required',
                'body'=>'required'
            ]
        );

        $create = Post::create($request->all());

        return response()->json(['status'=>'success','msg'=>'Post created successfully ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::findOrFail($id);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'body'=>'required'
            ]
        );

        $post = Post::findOrFail($id);

        $post->update($request->all());

        return response()->json(['status'=>'success','msg'=>'Post Updated successfully ']);
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
