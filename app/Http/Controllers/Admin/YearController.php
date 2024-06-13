<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Year";
        $year = Year::orderBy('id', 'desc')->get();
        return view('admin.year.year', ['years' => $year], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Add Year";
        return view('admin.year.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'year' => 'required',
        ]);

        if ($validator->passes()) {

            $year = new year();

            $year->year = $request->year;

            $result = $year->save();

            if ($result) {
                return redirect('admin/year')->with('success', 'Year detail added successfully!');
            } else {
                return redirect('admin/year/create')->with('error', 'Year detail not added successfully!');
            }
        } else {
            return redirect()->route('year.create')->withInput()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $title = "Edit Year";
        $year = year::find($id);
        return view('admin.year.edit', ['years' => $year], compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'year' => 'required',
        ]);

        if ($validator->passes()) {

            $year = year::find($id);
            if (!$year) {
                return redirect('admin/year')->withError('Year detail not found.');
            }
            $year->year = $request->year;

            $result = $year->save();

            if ($result) {
                return redirect('admin/year')->with('success','Year detail updated successfully!');
            } else {
                return redirect('admin/year/edit')->with('error','Year detail not updated successfully!');
            }
        } else {
            return redirect()->route('year.edit', $id)->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $year = year::find($id);

        // dd($notification);
        if (!$year) {
            return redirect('admin/year')->withError('Year detail not found.');
        }

        $result = $year->delete();

        if ($result) {
            return redirect('admin/year')->with('success','Year detail deleted successfully!');
        } else {
            return redirect('admin/year')->with('error','Year detail not deleted successfully!');
        }
    }
}
