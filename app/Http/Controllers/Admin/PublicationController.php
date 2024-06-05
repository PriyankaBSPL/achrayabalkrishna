<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use App\Models\Admin\Language;
use App\Models\Admin\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Publication List";
        $publication = Publication::orderBy('created_at', 'desc')->get();
        $SelectType = Menu::where('type', 'Publication')->where('status', 3)->where('parent_id', '>', 0)->pluck('title', 'id');
        $SelectLanguage = Language::orderBy('language', 'asc')->pluck('language', 'id');
        return view('admin.publication.publication', ['publications' => $publication, 'SelectTypes' => $SelectType, 'SelectLanguages' => $SelectLanguage], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Add Publication";
        $SelectType = Menu::where('type', 'Publication')->where('status', 3)->where('parent_id', '>', 0)->pluck('title', 'id');
        $SelectLanguage = Language::orderBy('language', 'asc')->pluck('language', 'id');
        return view('admin.publication.create', ['SelectTypes' => $SelectType, 'SelectLanguages' => $SelectLanguage], compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Validation = [
            'publication_type' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'language' => 'required',
            'author' => 'required',
            'category' => 'required',
            'publisher' => 'required',
            'isbn' => 'required',
            'pages' => 'required',
            'country' => 'required',
            'buynow_link' => 'required|url|max:255',
            'description' => 'required',
            'cover_type' => 'required'
        ];

        $validator = Validator::make($request->all(), $Validation);

        if ($validator->passes()) {

            $publication = new Publication();

            if (!is_dir('admin/upload/Publication')) {
                mkdir('admin/upload/Publication', 0777, TRUE);
            }

            $publication->publication_type = $request->publication_type;
            $publication->title = $request->title;
            $publication->language = $request->language;
            $publication->author = $request->author;
            $publication->category = $request->category;
            $publication->publisher = $request->publisher;
            $publication->isbn = $request->isbn;
            $publication->pages = $request->pages;
            $publication->country = $request->country;
            $publication->buynow_link = $request->buynow_link;
            $publication->description = $request->description;
            $publication->cover_type = $request->cover_type;
          
            if (isset($request->image)) {
                $image = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/admin/upload/Publication'), $image);
                $publication->image =  $image;
            }

            $result = $publication->save();

            if ($result) {
                return redirect('admin/publication')->with('success', 'Publication detail added successfully!');
            } else {
                return redirect('admin/publication/create')->with('error', 'Publication detail not added successfully!');
            }
        } else {
            return redirect()->route('publication.create')->withInput()->withErrors($validator);
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
        $title = "Edit Publication";
        $publication = Publication::find($id);
        $SelectType = Menu::where('type', 'Publication')->where('status', 3)->where('parent_id', '>', 0)->pluck('title', 'id');
        $SelectLanguage = Language::orderBy('language', 'asc')->pluck('language', 'id');
        return view('admin.publication.edit', ['publications' => $publication, 'SelectTypes' => $SelectType, 'SelectLanguages' => $SelectLanguage], compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'publication_type' => 'required',
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'language' => 'required',
            'author' => 'required',
            'category' => 'required',
            'publisher' => 'required',
            'isbn' => 'required',
            'pages' => 'required',
            'country' => 'required',
            'buynow_link' => 'required|url|max:255',
            'description' => 'required',
            'cover_type' => 'required'
        ]);

        if ($validator->passes()) {

            $publication = Publication::find($id);
            if (!$publication) {
                return redirect('admin/publication')->withError('Publication detail not found.');
            }

            $publication->publication_type = $request->publication_type;
            $publication->title = $request->title;
            $publication->language = $request->language;
            $publication->author = $request->author;
            $publication->category = $request->category;
            $publication->publisher = $request->publisher;
            $publication->isbn = $request->isbn;
            $publication->pages = $request->pages;
            $publication->country = $request->country;
            $publication->buynow_link = $request->buynow_link;
            $publication->description = $request->description;
            $publication->cover_type = $request->cover_type;

            if (isset($request->image)) {
                $newimage = time() . '.' . $request->image->extension();
                $request->image->move(public_path('/admin/upload/Publication/'), $newimage);
                $imagedestination = public_path('/admin/upload/Publication/') . $publication->image;
                if (file_exists($imagedestination) && is_file($imagedestination)) {
                    unlink($imagedestination);
                }
                $publication->image =  $newimage;
            }

            $result = $publication->save();

            if ($result) {
                return redirect('admin/publication')->with('success', 'Publication detail updated successfully!');
            } else {
                return redirect('admin/publication/edit')->with('error', 'Publication detail not updated successfully!');
            }
        } else {
            return redirect()->route('publication.edit', $id)->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $publication = Publication::find($id);

        // dd($notification);
        if (!$publication) {
            return redirect('admin/publication')->withError('Publication detail not found.');
        }

        $oldImagePath = public_path('/admin/upload/Publication/') . $publication->image;
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {
            unlink($oldImagePath);
        }

        $result = $publication->delete();

        if ($result) {
            return redirect('admin/publication')->with('success', 'Publication detail deleted successfully!');
        } else {
            return redirect('admin/publication')->with('error', 'Publication detail not deleted successfully!');
        }
    }
}
