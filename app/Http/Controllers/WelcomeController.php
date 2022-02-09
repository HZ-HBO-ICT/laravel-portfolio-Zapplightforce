<?php

namespace App\Http\Controllers;

class WelcomeController
{
    public function show($page){
            return view("$page");

    }

    public function blog($post){

        return view("$post");
    }
}
