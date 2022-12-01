<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaxTypeRequest;
use App\Http\Requests\UpdateTaxTypeRequest;
use App\Models\TaxType;

class TaxTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreTaxTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaxTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaxType  $taxType
     * @return \Illuminate\Http\Response
     */
    public function show(TaxType $taxType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaxType  $taxType
     * @return \Illuminate\Http\Response
     */
    public function edit(TaxType $taxType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaxTypeRequest  $request
     * @param  \App\Models\TaxType  $taxType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaxTypeRequest $request, TaxType $taxType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaxType  $taxType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaxType $taxType)
    {
        //
    }
}
