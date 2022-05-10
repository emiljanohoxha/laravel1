<?php

namespace App\Http\Controllers;

use App\Models\CategoryConfigurations;
use App\Http\Requests\StoreCategoryConfigurationsRequest;
use App\Http\Requests\UpdateCategoryConfigurationsRequest;

class CategoryConfigurationsController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoryConfigurationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryConfigurationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryConfigurations  $categoryConfigurations
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryConfigurations $categoryConfigurations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryConfigurations  $categoryConfigurations
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryConfigurations $categoryConfigurations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryConfigurationsRequest  $request
     * @param  \App\Models\CategoryConfigurations  $categoryConfigurations
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryConfigurationsRequest $request, CategoryConfigurations $categoryConfigurations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryConfigurations  $categoryConfigurations
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryConfigurations $categoryConfigurations)
    {
        //
    }
}
