<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityLevelRequest;
use App\Http\Requests\UpdateActivityLevelRequest;
use App\Models\ActivityLevel;
use App\Models\ActivityType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ActivityLevelController extends Controller
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
       return Inertia::render('Tour/CreateActivityLevel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityLevelRequest $request)
    {
        $validated = $request->validated();
        ActivityLevel::create($validated);
        return redirect('/tour/activity-level/manage');
    }

    /**
     * Display the specified resource.
     */
    public function show(ActivityLevel $activityLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityLevel $activityLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityLevelRequest $request, ActivityLevel $activityLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityLevel $level)
    {
        $level->delete();
        return redirect('/tour/activity-level/manage');
    }
    public function manage(Request $request){
        return Inertia::render('Tour/ManageActivityLevel',['activitylevels'=>ActivityLevel::latest()->paginate(15),'flash' => [
            'message' => fn () => $request->session()->get('status')]]);
    }
}
