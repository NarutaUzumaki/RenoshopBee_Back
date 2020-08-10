<?php

namespace App\Http\Controllers;

use App\catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalog = DB::table('catalogs')->get();

        return response()->json([
            'catalog'=>$catalog
        ]);
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
     * @param  \App\catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show(catalog $catalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit(catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(catalog $catalog)
    {
        //
    }
}
