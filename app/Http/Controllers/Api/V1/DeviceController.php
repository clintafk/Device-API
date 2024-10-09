<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\V1\StoreDeviceRequest;
use App\Http\Requests\V1\UpdateDeviceRequest;
use App\Models\Device;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DeviceResource;
use App\Http\Resources\V1\DeviceCollection;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return new DeviceCollection(Device::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeviceRequest $request)
    {
        //
        return new DeviceResource(Device::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        //
        //return $device;
        return new DeviceResource($device);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Device $device)
    // {
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeviceRequest $request, Device $device)
    {
        //
        $device->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        //
        $device->delete();
    }
}
