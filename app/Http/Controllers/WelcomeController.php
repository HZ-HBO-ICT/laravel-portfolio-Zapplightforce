<?php

namespace App\Http\Controllers;

class WelcomeController
{
    public function show($post){
            $posts = [
                'my-first-post' => 'This is my very first post',
                'my-second-post' => 'this is my nicely done second post'
            ];

            if (! array_key_exists($post, $posts)){
                abort(404, 'Page not found');
            }

            return view('welcome', [
                'post' => $posts[$post]
            ]);

    }
}
