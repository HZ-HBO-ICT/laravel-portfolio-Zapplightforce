<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'How do you print a document from your laptop at HZ?',
            'answer' => 'Go to the website print.hz.nl and login. Then upload the document you want to print.
                        Next go with your student card to the nearest printer and put it above the little screen next to the printer
                        (there should be one for every printer). It will then display the document you uploaded and you only have to press print.
                        Make sure your card has money on it.'
        ],[
            'question' => 'How do you print a document from your laptp at HZ?',
            'answer' => 'Go to the website print.hz.nl and login. Then upload the document you want to print.
                        Next go with your student card to the nearest printer and put it above the little screen next to the printer
                        (there should be one for every printer). It will then display the document you uploaded and you only have to press print.
                        Make sure your card has money on it.',
        ]);
    }
}
