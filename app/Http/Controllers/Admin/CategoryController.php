<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Category";
        $category = Category::orderBy('id', 'desc')->get();
        return view('admin.category.category', ['categories' => $category], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Add Category";
        return view('admin.category.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'category' => 'required',
        ]);

        if ($validator->passes()) {

            $category = new Category();

            $category->category = $request->category;

            $result = $category->save();

            if ($result) {
                return redirect('admin/category')->with('success', 'Category detail added successfully!');
            } else {
                return redirect('admin/category/create')->with('error', 'Category detail not added successfully!');
            }
        } else {
            return redirect()->route('category.create')->withInput()->withErrors($validator);
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
        $title = "Edit Category";
        $category = Category::find($id);
        return view('admin.category.edit', ['categories' => $category], compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'category' => 'required',
        ]);

        if ($validator->passes()) {

            $category = Category::find($id);
            if (!$category) {
                return redirect('admin/category')->withError('Category detail not found.');
            }
            $category->category = $request->category;

            $result = $category->save();

            if ($result) {
                return redirect('admin/category')->with('success','Category detail updated successfully!');
            } else {
                return redirect('admin/category/edit')->with('error','Category detail not updated successfully!');
            }
        } else {
            return redirect()->route('category.edit', $id)->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::find($id);

        // dd($notification);
        if (!$category) {
            return redirect('admin/category')->withError('Category detail not found.');
        }

        $result = $category->delete();

        if ($result) {
            return redirect('admin/category')->with('success','Category detail deleted successfully!');
        } else {
            return redirect('admin/category')->with('error','Category detail not deleted successfully!');
        }
    }
}
