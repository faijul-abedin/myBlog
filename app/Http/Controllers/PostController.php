<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{

    public function index(){
        $data['posts'] = DB::table('posts')->GET();
        //dd($data);
        return view('post/index', $data);
    }

    public function create(){
        // return '<h1>I am from post controller.</h1>';
        return view('post/create');
    }

    

    public function store(Request $request){
        $data['title'] = $request->title;
        $data['details'] = $request->details;

        DB::table('posts')->insert($data);
        //dd(DB::table('posts')->GET());
        return redirect('post');
    }

    public function show($id){
        $data['post'] = DB::table('posts')->where('id',$id)->first();
        return view('post/show', $data);
    }

    public function edit($id){
        $data['post'] = DB::table('posts')->where('id',$id)->first();
        return view('post/edit', $data);
    }

    public function update(Request $request, $id){
        $data['title'] = $request->title;
        $data['details'] = $request->details;

        DB::table('posts')->where('id', $id) ->update($data);
        return redirect('post');
    }

    public function destroy($id){

        DB::table('posts')->where('id', $id) ->delete();
        return redirect('post');
    }

}
