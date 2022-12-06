<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\City;
use App\Models\State;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::query()->paginate(10);

        return view('suppliers.index', \compact(['suppliers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::query()->get();

        $states = State::query()->get();

        return view('suppliers.create', \compact(['cities', 'states']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        // $this->authorize('create', Supplier::class);

        $success = auth()->user()->suppliers()->create($request->validated());

        if($success) {
            return redirect()->route('suppliers.index')->withSuccess('Supplier created successfully.');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('suppliers.show', \compact(['supplier']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $cities = City::query()->get();

        $states = State::query()->get();

        return view('suppliers.edit', \compact(['supplier', 'cities', 'states']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        // $this->authorize('update', $state);

        $success = $supplier->update($request->validated());

        if($success) {
            return redirect()->route('suppliers.index')->withSuccess('Supplier updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        // $this->authorize('delete', $state);

        $success = $supplier->delete();

        if($success) {
            return redirect()->route('suppliers.index')->withSuccess('Supplier deleted successfully.');
        }
    }
}
