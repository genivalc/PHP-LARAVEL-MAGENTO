<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocacoesRequest;
use App\Http\Requests\UpdateLocacoesRequest;
use App\Models\Locacoes;

class LocacoesController extends Controller
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
     * @param  \App\Http\Requests\StoreLocacoesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocacoesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locacoes  $locacoes
     * @return \Illuminate\Http\Response
     */
    public function show(Locacoes $locacoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locacoes  $locacoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Locacoes $locacoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocacoesRequest  $request
     * @param  \App\Models\Locacoes  $locacoes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocacoesRequest $request, Locacoes $locacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locacoes  $locacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locacoes $locacoes)
    {
        //
    }
}
