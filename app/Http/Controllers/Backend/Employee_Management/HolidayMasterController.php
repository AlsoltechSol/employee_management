<?php

namespace App\Http\Controllers\Backend\Employee_Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HolidayMaster;

class HolidayMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holiday = HolidayMaster::all();
        return view('backend.pages.holiday.index',compact('holiday'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.holiday.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'holiday_date' => 'required',
            'holiday_day' => 'required',

        ]);

        // Create New HolidayMaster
        $holiday = new HolidayMaster();
        $holiday->title = $request->title;
        $holiday->holiday_date = $request->holiday_date;
        $holiday->holiday_day = $request->holiday_day;
        
        $holiday->save();
        session()->flash('success', 'Holiday Details has been created !!');
        return redirect()->route('admin.holidayMaster.index');

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
        $holiday = HolidayMaster::find($id);
        
        return view('backend.pages.holiday.edit', compact('holiday'));
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
        $request->validate([
            'title' => 'required|max:50',
            'holiday_date' => 'required',
            'holiday_day' => 'required',

        ]);

        // update HolidayMaster
        $holiday = HolidayMaster::find($id);
        $holiday->title = $request->title;
        $holiday->holiday_date = $request->holiday_date;
        $holiday->holiday_day = $request->holiday_day;
        
        $holiday->save();
        session()->flash('success', 'Holiday Details has been updated !!');
        return redirect()->route('admin.holidayMaster.index');
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
