<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Category;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::query()->paginate(10);

        return view('items.index', \compact(['items']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->get();

        return view('items.create', \compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        $validated = $request->validated();
        
        $validated['manufactured_at'] = now();
        
        $validated['is_finished'] = 1;

        // dd($validated);

        $success = auth()->user()->items()->create($validated);

        // dd($success);

        if($success) {
            return redirect()->route('items.index')->withSuccess('Item added successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $categories = Category::query()->get();
        
        return view('items.edit', \compact(['item', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $validated = $request->validated();
        
        $validated['manufactured_at'] = now();
        
        $validated['is_finished'] = 1;

        $success = $item->update($validated);

        if($success) {
            return redirect()->route('items.index')->withSuccess('Item updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $success = $item->delete();

        if($success) {
            return redirect()->route('items.index')->withSuccess('Item deleted successfully.');
        }
    }
}
