<?php

namespace App\Http\Controllers\Admin;

use App\Models\Region;
use App\Http\Controllers\Controller;
use App\Http\Requests\Region\StoreRegionRequest;
use App\Http\Requests\Region\UpdateRegionRequest;

class RegionController extends Controller
{
    public function index()
    {
        //
    }


    public function store(StoreRegionRequest $request)
    {
        //
    }

    public function show(Region $region)
    {
        //
    }

    public function update(UpdateRegionRequest $request, Region $region)
    {
        //
    }

    public function destroy(Region $region)
    {
        //
    }
}
