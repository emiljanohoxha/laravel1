<?php

namespace App\Http\Controllers;

use App\Models\CategoryConfigurationKeys;
use App\Http\Requests\StoreCategoryConfigurationKeysRequest;
use App\Http\Requests\UpdateCategoryConfigurationKeysRequest;
use App\Models\CategoryConfigurations;
use Illuminate\Http\Request;



class CategoryConfigurationKeysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request,CategoryConfigurationKeys $cat)
    {
        $name = $request->input('name');
        $query = $cat->newQuery();
        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }
        return view('category.category', ['category' => $query->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryConfigurationKeysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryConfigurationKeysRequest $request)
    {

            $category = CategoryConfigurationKeys::create([

                'name'  => $request->name,
                'extra' => $request->extra,
            ]);
            return redirect()->route('category.category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryConfigurationKeys  $categoryConfigurationKeys
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryConfigurationKeys $categoryConfigurationKeys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryConfigurationKeys  $categoryConfigurationKeys
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = CategoryConfigurationKeys::findOrFail($id);
        return view('category.edit', ["category" => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryConfigurationKeysRequest  $request
     * @param  \App\Models\CategoryConfigurationKeys  $categoryConfigurationKeys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $category = CategoryConfigurationKeys::findOrFail($request->id);
        $category->extra = $request->extra;
        $category->save();

        return redirect()->route('category.category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryConfigurationKeys  $categoryConfigurationKeys
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryConfigurationKeys $categoryConfigurationKeys, $id)
    {
        $post = $categoryConfigurationKeys::find($id);

        $exists = CategoryConfigurations::where('key', '=',$post->name)->first();
        if(!$exists)
        {
            $post->delete();
            return redirect()->route('category.category')->with('successMessage',"Deleted Succesfully");

        } else  {
            return redirect()->route('category.category')->with('errorMessage',"You cannot delete this record because is related with another table");
        }
    }
}

