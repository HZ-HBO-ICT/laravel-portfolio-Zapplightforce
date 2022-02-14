<?php

namespace App\Http\Controllers;
use App\Models\Faq;
class WelcomeController
{
    public function show($page){
            return view("$page");

    }

    public function faq(){
        $posts = Faq::all();
        return view('faq', [
            'posts' => $posts
        ]);
    }


    public function blog($post){

        return view("$post");
    }

    public function test($slug){

        return view('welcome', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
