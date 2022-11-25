<?php

namespace App\Http\Controllers;

use App\Models\Newpost;
use Illuminate\Http\Request;

class NewpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newpost  $newpost
     * @return \Illuminate\Http\Response
     */
    public function show(Newpost $newpost)
    {
        dd($newpost); 
     //   return view('web.notidetalle', compact('newpost'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newpost  $newpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Newpost $newpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newpost  $newpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newpost $newpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newpost  $newpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newpost $newpost)
    {
        //
    }
}
