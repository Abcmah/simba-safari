<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTourRequest;
use App\Http\Requests\UpdateTourRequest;
use App\Models\ActivityLevel;
use App\Models\ActivityType;
use App\Models\Landscape;
use App\Models\Region;
use App\Models\Tour;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::latest()->filter(request(['activity','region','badget','departing', 'returning']))->Paginate(10);
        return view('tourlisting',['tourlistings'=>$tours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activities = ActivityType::all();
        $activity_level = ActivityLevel::all();
        $landscapes = Landscape::all();
        $regions = Region::all();
        return Inertia::render('Tour/Create',[
            'activities'=>$activities,
            'activity_level'=>$activity_level,
            'landscapes' =>$landscapes,
            'regions' =>$regions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTourRequest $request)
    {
        $validated = $request->validated();
//        dd($validated);
        if($request->hasFile('photo')){
            $validated['photo'] = $request->file('photo')->store('uploads','public');
        }
        Tour::create([
            'place'=>$validated['place'],
            'days'=>$validated['days'],
            'nights'=>$validated['nights'],
            'discription'=>$validated['description'],
            'badget_from'=>$validated['badget_from'],
            'region_id'=>$validated['region_id'],
            'activity_type_id'=>$validated['activity_id'],
            'activity_level_id'=>$validated['activity_level_id'],
            'landscape_id'=>$validated['landscape_id'],
            'photo' => $validated['photo']
        ]);
        return redirect('/tour/manage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        $activities = ActivityType::all();
        $activity_level = ActivityLevel::all();
        $landscapes = Landscape::all();
        $regions = Region::all();
        return Inertia::render('Tour/Edit',[
            'activities'=>$activities,
            'activity_level'=>$activity_level,
            'landscapes' =>$landscapes,
            'regions' =>$regions,
            'tour'=> $tour
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTourRequest $request, Tour $tour)
    {
        $validated = $request->validated();
        if($request->hasFile('photo')){
            $validated['photo'] = $request->file('photo')->store('uploads','public');
        }
        $tour->update([
            'place'=>$validated['place'],
            'days'=>$validated['days'],
            'nights'=>$validated['nights'],
            'discription'=>$validated['description'],
            'badget_from'=>$validated['badget_from'],
            'region_id'=>$validated['region_id'],
            'activity_type_id'=>$validated['activity_id'],
            'activity_level_id'=>$validated['activity_level_id'],
            'landscape_id'=>$validated['landscape_id'],
            'photo' => $validated['photo']
        ]);
        return redirect('/tour/manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect('/tour/manage');
    }
    public function manage(Request $request){
        $tours = Tour::latest()->with(['region','activity_type'])->paginate(15);
        return Inertia::render('Tour/ManageTour',['tours'=>$tours,'flash' => [
            'message' => fn () => $request->session()->get('status')
        ]]);
    }

}
