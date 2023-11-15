<?php

namespace App\Http\Controllers;

use App\Models\Framework;
use App\Http\Requests\StoreFrameworkRequest;
use App\Http\Requests\UpdateFrameworkRequest;

class FrameworkController extends Controller
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
     * @param  \App\Http\Requests\StoreFrameworkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFrameworkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function show(Framework $framework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function edit(Framework $framework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFrameworkRequest  $request
     * @param  \App\Models\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFrameworkRequest $request, Framework $framework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Framework $framework)
    {
        //
    }
}
