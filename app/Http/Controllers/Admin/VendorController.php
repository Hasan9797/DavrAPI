<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vendor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\StoreVendorRequest;
use App\Http\Requests\Vendor\UpdateVendorRequest;

class VendorController extends Controller
{
    public function index()
    {
        //
    }

    public function store(StoreVendorRequest $request)
    {
        //
    }

    public function show(Vendor $vendor)
    {
        //
    }

    public function update(UpdateVendorRequest $request, Vendor $vendor)
    {
        //
    }

    public function destroy(Vendor $vendor)
    {
        //
    }
}
