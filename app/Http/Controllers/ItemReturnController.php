<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemReturnRequest;
use App\Http\Requests\UpdateItemReturnRequest;
use App\Models\ItemReturn;

class ItemReturnController extends Controller
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
     * @param  \App\Http\Requests\StoreItemReturnRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemReturnRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemReturn  $itemReturn
     * @return \Illuminate\Http\Response
     */
    public function show(ItemReturn $itemReturn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemReturn  $itemReturn
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemReturn $itemReturn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemReturnRequest  $request
     * @param  \App\Models\ItemReturn  $itemReturn
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemReturnRequest $request, ItemReturn $itemReturn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemReturn  $itemReturn
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemReturn $itemReturn)
    {
        //
    }
}
