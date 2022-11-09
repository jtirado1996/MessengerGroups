<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessengerBrandRequest;
use App\Http\Requests\UpdateMessengerBrandRequest;
use App\Models\MessengerBrand;

class MessengerBrandController extends Controller
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
     * @param  \App\Http\Requests\StoreMessengerBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessengerBrandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MessengerBrand  $messengerBrand
     * @return \Illuminate\Http\Response
     */
    public function show(MessengerBrand $messengerBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MessengerBrand  $messengerBrand
     * @return \Illuminate\Http\Response
     */
    public function edit(MessengerBrand $messengerBrand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessengerBrandRequest  $request
     * @param  \App\Models\MessengerBrand  $messengerBrand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessengerBrandRequest $request, MessengerBrand $messengerBrand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MessengerBrand  $messengerBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessengerBrand $messengerBrand)
    {
        //
    }
}
