<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Draw;
use Illuminate\Http\Request;
use App\Http\Requests\DrawRequest;
use App\Http\Resources\DrawResource;

class DrawController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrawRequest $request)
    {
        $draw = Draw::create($request->validated());
        
        return new DrawResource($draw);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Draw  $draw
     * @return \Illuminate\Http\Response
     */
    public function show(Draw $draw)
    {
        return new DrawResource($draw);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Draw  $draw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Draw $draw)
    {
        $draw->update($request->validated());

        return new DrawResource($draw);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Draw  $draw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Draw $draw)
    {
        //
    }
}
