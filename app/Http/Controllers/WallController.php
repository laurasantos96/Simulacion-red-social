<?php

namespace App\Http\Controllers;

use App\Http\Requests\WallRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;


class WallController extends Controller
{
    //
    
    public function index (Request $request) //($code = 210, $message = 'Listado de posts')// 
    {
        $code = $request->code;
        $message = $request->message;

        /*$posts = DB::table('post')->get();*/
        $posts = Post::orderByDesc('id')->get();
    
        return view ('wall', compact('posts', 'code', 'message'));

    }

    public function show (Post $post) {

    
        /*$post = DB::table('post')->find($id);*/
        return view ('post', compact('post'));
        /* return view ('post' , ['post' => $postDetalle]);*/
    
    }

    public function create(){
        return view ('editpost');
    }

    public function store (WallRequest $request) {

        $url='';
        if($request->hasFile('img')){
            $img = $request->file('img')->store ('public/posts');
            $url = Storage::url($img);
        }

      /*   DB::table('post')->insert([
           'title'=>$request->title,
           'content'=>$request->content ,
           'img'=>$url
        ]);*/
        /*$post = Post::create ([
            'title' =>$request->title,
            'content' =>$request->content ,
            'img' =>$url
        ]);
        $post->saveOrFail (); */
        $post=Post::create($request->validated());
        $post->img = $url;
        $post->saveOrFail ();
        return redirect()-> route ('wall', ['code'=>'200', 'message'=>'Post creado correctamente']);
        

    }

    public function edit (Post $post) {

        //igual que el show//
    
        /*$post = DB::table('post')->find($id);*/
        return view ('updatepost', compact('post'));
        /* return view ('post' , ['post' => $postDetalle]);*/
    
    }

    public function update (WallRequest $request, Post $post) {
        //igual que el store//
        $url='';
        if($request->hasFile('img')){
            $img = $request->file('img')->store ('public/posts');
            $url = Storage::url($img);
        }


        $post-> fill($request->validated());
        $post->img = $url;
        $post->saveOrFail ();
        return redirect()-> route ('wall', ['code'=>'200', 'message'=>'Post creado correctamente']);
        

    }

    
    public function destroy (Post $post) {
        $post->deleteOrFail();
        return redirect()-> route ('wall', ['code'=>'200', 'message'=>'Post borrado correctamente']);;
    }





}
