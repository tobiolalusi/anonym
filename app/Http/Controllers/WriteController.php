<?php

namespace App\Http\Controllers;

use App\Write;
use Illuminate\Http\Request;

class WriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writes = Write::all()->sortByDesc('updated_at');

        return view('writes.index', compact('writes'));
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
     * @param  \App\Write  $write
     * @return \Illuminate\Http\Response
     */
    public function show(Write $write)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Write  $write
     * @return \Illuminate\Http\Response
     */
    public function edit(Write $write)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Write  $write
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Write $write)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Write  $write
     * @return \Illuminate\Http\Response
     */
    public function destroy(Write $write)
    {
        //
    }
}
