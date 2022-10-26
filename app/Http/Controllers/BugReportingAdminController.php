<?php

namespace App\Http\Controllers;

use App\Models\BugReporting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class BugReportingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.index', [
            'bug_reportings' => BugReporting::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:bug_reportings',
            'aplikasi' => 'required|max:255',
            'jenis_laporan' => 'required|max:255',
            'role_akun' => 'required|max:255',
            'link' => 'required|max:255',
            'image' => 'image|file|max:10240',
            'deskripsi' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('bugreporting-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        BugReporting::create($validatedData);

        return redirect('dashboard/bugreportadmin')->with('success', 'New bug report has been added!');
    }

    
    public function show($slug)
    {
        $bugreport = BugReporting::where('slug', $slug)->first();
        // return $bugreport;
        return view('dashboard.admin.show', [
            'bugreport' => $bugreport
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BugReporting  $bugReporting
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {   
        $bugreport = BugReporting::where('slug', $slug)->first();
        return view('dashboard.admin.edit', [
            'bugreport' => $bugreport
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BugReporting  $bugReporting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $bugreport = BugReporting::where('slug', $slug)->first();
        
        $rules = [
            'judul' => 'required|max:255',
            'aplikasi' => 'required|max:255',
            'jenis_laporan' => 'required|max:255',
            'role_akun' => 'required|max:255',
            'link' => 'required|max:255',
            'image' => 'image|file|max:10240',
            'deskripsi' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ];

        // if ($request->slug != $bugReporting->slug) {
        //     $rules['slug'] = 'required|unique:bug_reportings';
        // }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('bugreporting-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        BugReporting::where('id', $bugreport->id)->update($validatedData);

        return redirect('dashboard/bugreportadmin')->with('success', 'Bug Report has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BugReporting  $bugReporting
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $bugreport = BugReporting::where('slug', $slug)->first();
        if($bugreport->image){
            Storage::delete($bugreport->image);
        }
        BugReporting::destroy($bugreport->id);

        return redirect('dashboard/bugreportadmin')->with('success', 'Bug Report has been deleted!');
    }

    public function categorybug()
    {
        $bugreport = BugReporting::where('jenis_laporan', 'bug')->get();
        return view('dashboard.admin.bug', [
            'bug_reportings' => $bugreport
        ]);
    }

    public function categoryrequest()
    {
        $bugreport = BugReporting::where('jenis_laporan', 'Feature Request')->get();
        return view('dashboard.admin.feature', [
            'bug_reportings' => $bugreport
        ]);
    }
}
