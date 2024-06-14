<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Year;
use Illuminate\Http\Request;
use App\Models\Admin\ResearchPaper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ResearchPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Research Paper";
        $research = ResearchPaper::orderBy('created_at', 'desc')->get();
        $SelectYear = Year::orderBy('Year', 'asc')->pluck('year', 'id');
        return view('admin.research_papers.research_papers', ['researchs' => $research, 'SelectYears' => $SelectYear], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Add Research Paper";
        $SelectYear = Year::orderBy('year', 'asc')->pluck('year', 'id');
        return view('admin.research_papers.create', ['SelectYears' => $SelectYear], compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Validation = [
            'year' => 'required',     
            'description' => 'required',
            'link' => 'required|url|max:255',
        ];

        $validator = Validator::make($request->all(), $Validation);

        if ($validator->passes()) {

            $research = new ResearchPaper();

            $research->year = $request->year;
            $research->description = $request->description;
            $research->link = $request->link;
          
            $result = $research->save();

            if ($result) {
                return redirect('admin/research-paper')->with('success', 'Research paper detail added successfully!');
            } else {
                return redirect('admin/research-paper/create')->with('error', 'Research paper detail not added successfully!');
            }
        } else {
            return redirect()->route('research-paper.create')->withInput()->withErrors($validator);
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
        $title = "Edit Research paper";
        $research = ResearchPaper::find($id);
        $SelectYear = Year::orderBy('year', 'asc')->pluck('year', 'id');
        return view('admin.research_papers.edit', ['researchs' => $research, 'SelectYears' => $SelectYear], compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'year' => 'required',     
            'description' => 'required',
            'link' => 'required|url|max:255',
        ]);
        

        if ($validator->passes()) {

            $research = ResearchPaper::find($id);
            if (!$research) {
                return redirect('admin/research-paper')->withError('Research paper detail not found.');
            }

            $research->year = $request->year;
            $research->description = $request->description;
            $research->link = $request->link;

            $result = $research->save();
            // dd($result);
            if ($result) {
                return redirect('admin/research-paper')->with('success', 'Research paper detail updated successfully!');
            } else {
                return redirect('admin/research-paper/edit')->with('error', 'Research paper detail not updated successfully!');
            }
        } else {
            return redirect()->route('research-paper.edit', $id)->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $research = ResearchPaper::find($id);

        // dd($notification);
        if (!$research) {
            return redirect('admin/research-paper')->withError('Research paper detail not found.');
        }

        $result = $research->delete();

        if ($result) {
            return redirect('admin/research-paper')->with('success', 'Research paper detail deleted successfully!');
        } else {
            return redirect('admin/research-paper')->with('error', 'Research paper detail not deleted successfully!');
        }
    }
}
