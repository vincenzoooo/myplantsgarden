<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Http\Requests\StoreFamilyRequest;
use App\Http\Requests\UpdateFamilyRequest;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('family/list', ['families' => Family::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('families/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFamilyRequest $request)
    {
        $validatedData = $request->safe()->all();
        $family = Family::create($validatedData);
        return redirect('/families/' + $family->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('families/show', ['family' => Family::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('families/edit', ['family' => Family::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFamilyRequest $request)
    {
        $validatedData = $request->safe()->except(['id']);
        $family = Family::where('id', $request->safe()->only(['id']))->update($validatedData);
        return redirect('/families/' + $family->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $family = Family::findOrFail($id);
        $family->delete();
        return redirect('/families');
    }
}
