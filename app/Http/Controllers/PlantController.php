<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('plants/list', ['plants' => Plant::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plants/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlantRequest $request)
    {
        $validatedData = $request->safe()->all();
        $validatedData['user_id'] = Auth::id();
        $plant = Plant::create($validatedData);
        return redirect('/plants/' + $plant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('plants/show', ['plant' => Plant::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('plants/edit', ['plant' => Plant::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlantRequest $request)
    {
        $validatedData = $request->safe()->except(['id']);
        $validatedData['user_id'] =  Auth::id();
        $plant = Plant::where('id', $request->safe()->only(['id']))->update($validatedData);
        return redirect('/plants/' + $plant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $plant = Plant::findOrFail($id);
        $plant->delete();
        return redirect('/plants');
    }
}
