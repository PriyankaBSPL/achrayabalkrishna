<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Language;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Language";
        $youtube = Language::orderBy('id', 'desc')->get();
        return view('admin.language.language', ['languages' => $youtube], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Add Language";
        return view('admin.language.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'language' => 'required',
        ]);

        if ($validator->passes()) {

            $language = new language();

            $language->language = $request->language;

            $result = $language->save();

            if ($result) {
                return redirect('admin/language')->with('success', 'Language detail added successfully!');
            } else {
                return redirect('admin/language/create')->with('error', 'Language detail not added successfully!');
            }
        } else {
            return redirect()->route('language.create')->withInput()->withErrors($validator);
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
        $title = "Edit Language";
        $language = Language::find($id);
        return view('admin.language.edit', ['languages' => $language], compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $validator = Validator::make($request->all(), [
            'language' => 'required',
        ]);

        if ($validator->passes()) {

            $language = Language::find($id);
            if (!$language) {
                return redirect('admin/language')->withError('Language detail not found.');
            }
            $language->language = $request->language;

            $result = $language->save();

            if ($result) {
                return redirect('admin/language')->with('success','Language detail updated successfully!');
            } else {
                return redirect('admin/language/edit')->with('error','Language detail not updated successfully!');
            }
        } else {
            return redirect()->route('language.edit', $id)->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         $language = Language::find($id);

        // dd($notification);
        if (!$language) {
            return redirect('admin/language')->withError('Language detail not found.');
        }

        $result = $language->delete();

        if ($result) {
            return redirect('admin/language')->with('success','Language detail deleted successfully!');
        } else {
            return redirect('admin/language')->with('error','Language detail not deleted successfully!');
        }
    }
}
