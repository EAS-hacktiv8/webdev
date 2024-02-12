<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodata = Biodata::all();
        return view("biodata.list")->with("biodata", $biodata);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("biodata.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Biodata::create($request->all());
        return redirect()->route("biodata.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodata = Biodata::find($id);
        return view("biodata.edit")->with("biodata", $biodata);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Biodata::find($id)->update($request->all());
        return redirect()->route("biodata.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Biodata::find($id)->delete();
        return redirect()->route("biodata.index");
    }
}
