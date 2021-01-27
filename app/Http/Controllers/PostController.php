<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use File;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::simplePaginate(4);

        return view('blogs.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
     $imageName = time().'.'.$request->image->extension();
     $post = new Post();
     $post->title = $request->title;
     $post->content = $request->content;
     $post->image = $imageName;
     $post->save();
     if($post)
     $request->image->move(public_path('images'),$imageName);
     return redirect()->route('post.index')->with('status','A new post has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('blogs.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('blogs.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
      
       $post = Post::find($id);
       
       if($request->image != "")
       {
           $path = 'images/'.$post->image;
           if(File::exists($path))
           File::delete($path);
           $imageName = time().'.'.$request->image->extension();
           $post->image = $imageName;
           $request->image->move(public_path('images'),$imageName);
       }

       $post->title = $request->title;
       $post->content = $request->content;
       $post->update();
       return redirect()->route('post.index')->with('status','Pos has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Post::find($id)->delete();
      return redirect()->route('post.index')->with('status','Pos has been successfully deleted!');
    }

    // private function validateData(){
    //   return request()->validate([
    //         'title'=>'required',
    //         'email'=>'required|email',
    //         'password'=>'required',
    //         'password_confirmation'=>'confirmed',
    //         'content'=>'required',
    //         'image'=>'required|min:png,jpg,jpeg,gif|max:1024'
    //     ]);
    // }
}
