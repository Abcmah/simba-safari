<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityTypeRequest;
use App\Http\Requests\UpdateActivityTypeRequest;
use App\Models\ActivityType;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ActivityTypeController extends Controller
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
        return Inertia::render('Tour/CreateActivity');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityTypeRequest $request)
    {
        $validated = $request->validated();
        ActivityType::create($validated);
        return redirect('/tour/activity/manage');
//        dd($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(ActivityType $activityType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityType $activityType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityTypeRequest $request, ActivityType $activityType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityType $activity)
    {
        $activity->delete();
        return redirect('/tour/activity/manage');
    }
    public function manage(Request $request){
        return Inertia::render('Tour/ManageActivity',['activities'=>ActivityType::latest()->paginate(15),'flash' => [
            'message' => fn () => $request->session()->get('status')]]);
    }
}
