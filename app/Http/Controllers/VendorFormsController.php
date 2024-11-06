<?php

namespace App\Http\Controllers;

use App\Models\VendorForms;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVendorFormsRequest;
use App\Http\Requests\UpdateVendorFormsRequest;

class VendorFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorFormsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VendorForms $vendorForms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VendorForms $vendorForms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorFormsRequest $request, VendorForms $vendorForms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VendorForms $vendorForms)
    {
        //
    }
}
