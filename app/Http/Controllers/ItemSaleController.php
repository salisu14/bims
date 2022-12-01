<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemSaleRequest;
use App\Http\Requests\UpdateItemSaleRequest;
use App\Models\ItemSale;

class ItemSaleController extends Controller
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
     * @param  \App\Http\Requests\StoreItemSaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemSaleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemSale  $itemSale
     * @return \Illuminate\Http\Response
     */
    public function show(ItemSale $itemSale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemSale  $itemSale
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemSale $itemSale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemSaleRequest  $request
     * @param  \App\Models\ItemSale  $itemSale
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemSaleRequest $request, ItemSale $itemSale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemSale  $itemSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemSale $itemSale)
    {
        //
    }
}
