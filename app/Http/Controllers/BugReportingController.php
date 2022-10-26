<?php

namespace App\Http\Controllers;

use App\Models\BugReporting;
use Illuminate\Http\Request;

class BugReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\BugReporting  $bugReporting
     * @return \Illuminate\Http\Response
     */
    public function show(BugReporting $bugReporting)
    {
        return view('dashboard.admin.show',[
            'bugreportings' => $bugReporting
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BugReporting  $bugReporting
     * @return \Illuminate\Http\Response
     */
    public function edit(BugReporting $bugReporting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BugReporting  $bugReporting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BugReporting $bugReporting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BugReporting  $bugReporting
     * @return \Illuminate\Http\Response
     */
    public function destroy(BugReporting $bugReporting)
    {
        //
    }
}
