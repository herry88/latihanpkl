<?php

namespace App\Http\Controllers;

use App\Models\Cateogry;
use Illuminate\Http\Request;

class CateogryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Cateogry::all();
        return view('category.index', compact('category'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cateogry  $cateogry
     * @return \Illuminate\Http\Response
     */
    public function show(Cateogry $cateogry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cateogry  $cateogry
     * @return \Illuminate\Http\Response
     */
    public function edit(Cateogry $cateogry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cateogry  $cateogry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cateogry $cateogry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cateogry  $cateogry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cateogry $cateogry)
    {
        //
    }
}
