<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Faq;
class WelcomeController
{
    public function show($page){

        return view("$page", [
                'articles' => Article::latest()->get()
            ], [
            'faqs' => Faq::latest()->get()
        ]);

    }

    public function blog($id){

        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

}
