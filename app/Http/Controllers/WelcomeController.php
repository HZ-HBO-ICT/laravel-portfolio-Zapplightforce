<?php

namespace App\Http\Controllers;
class WelcomeController
{
    public function show($page){

        return view("$page");

    }
}
