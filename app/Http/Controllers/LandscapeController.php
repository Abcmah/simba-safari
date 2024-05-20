<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLandscapeRequest;
use App\Http\Requests\UpdateLandscapeRequest;
use App\Models\ActivityType;
use App\Models\Landscape;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LandscapeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Tour/CreateLandscape');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLandscapeRequest $request)
    {
        $validated = $request->validated();
        Landscape::create($validated);
        return redirect('/tour/landscape/manage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Landscape $landscape)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Landscape $landscape)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLandscapeRequest $request, Landscape $landscape)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Landscape $landscape)
    {
        $landscape->delete();
        return redirect('/tour/landscape/manage');
    }
    public function manage(Request $request){
        return Inertia::render('Tour/ManageLandscape',['landscapes'=>Landscape::latest()->paginate(15),'flash' => [
            'message' => fn () => $request->session()->get('status')]]);
    }
}
