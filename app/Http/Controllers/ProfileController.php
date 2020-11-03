<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Activity repository instance.
     */
    protected Profile $profileModel;

    /**
     * @param ActivityService $activityService
     * @param LocationService $LocationService
     * @param ActivityTypeService $activityTypeService
     *
     * @return void
     */
    public function __construct(Profile $profileModel)
    {
        $this->profileModel = $profileModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->name ?? null;
        $category = $request->category ?? null;
        $location = $request->location ?? null;

        return $this->profileModel
        ->when($name, function ($query) use ($name) {
            return $query->where('name', $name);
        })
        ->when($category, function ($query) use ($category) {
            return $query->where('category', $category);
        })
        ->when($location, function ($query) use ($location) {
            return $query->where('location', $location);
        })
        ->orderBy('id', 'desc')
        ->paginated(10);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
