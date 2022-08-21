<?php

namespace App\Http\Controllers;

use App\Models\localPurchasingOrder;
use App\Http\Requests\StorelocalPurchasingOrderRequest;
use App\Http\Requests\UpdatelocalPurchasingOrderRequest;

class LocalPurchasingOrderController extends Controller
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
     * @param  \App\Http\Requests\StorelocalPurchasingOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelocalPurchasingOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\localPurchasingOrder  $localPurchasingOrder
     * @return \Illuminate\Http\Response
     */
    public function show(localPurchasingOrder $localPurchasingOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\localPurchasingOrder  $localPurchasingOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(localPurchasingOrder $localPurchasingOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelocalPurchasingOrderRequest  $request
     * @param  \App\Models\localPurchasingOrder  $localPurchasingOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelocalPurchasingOrderRequest $request, localPurchasingOrder $localPurchasingOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\localPurchasingOrder  $localPurchasingOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(localPurchasingOrder $localPurchasingOrder)
    {
        //
    }
}
