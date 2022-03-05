<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::latest()->get();
        $hzUniversity = [];
        $general = [];
        $ict = [];
        $middelburg = [];

        foreach ($faqs as $faq){
            if ($faq->categories === 'hzUniversity') {
                array_push($hzUniversity, $faq);
            }
            if ($faq->categories === 'general') {
                array_push($general, $faq);
            }
            if ($faq->categories === 'ict') {
                array_push($ict, $faq);
            }
            if ($faq->categories === 'middelburg') {
                array_push($middelburg, $faq);
            }
    }

        return view("faqs.index", [
            'hzUniversity' => $hzUniversity,
            'general' => $general,
            'ict' => $ict,
            'middelburg' => $middelburg
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->categories = request('categories');

        $faq->save();

        return redirect('/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = Faq::find($id);
        return view('faqs.show', ['faq' => $faq]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faqs.edit', ['faq' => $faq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->categories = request('categories');

        $faq->save();

        return redirect('/faq/' . $faq->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        return redirect('faq');
    }
}
