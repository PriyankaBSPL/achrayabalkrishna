<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Award;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title='Award List';
        $data=Award::orderBy('id','desc')->get();
        return view('admin.award.list',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $title='Add Award';
        return view('admin.award.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required'
          ]);
      
          $award=new Award;
          $award->title=$request->title;
          $award->description=$request->description;
          $award->date=$request->date;
          $award->status=$request->status;
          if (isset($request->image)) {
              $file = $request->file('image');
              $image = time() . '.' . $file->extension();
              $request->image->move(public_path('/admin/uploads/award'), $image);
              $award->image = $image; 
          }
          $result = $award->save();
          if ($result) {
              return redirect('/admin/award')->withSuccess('Award detail added Successfully!');
          } else {
              return redirect('/admin/award')->withError('Unable to add Award details!');
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
        $title='Edit Award';
        $data=Award::find($id);
        return view('admin.award.edit',compact('title','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator= $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required'
          ]);
      
          $award=Award::find($id);
          $award->title=$request->title;
          $award->description=$request->description;
          $award->date=$request->date;
          $award->status=$request->status;
          if (isset($request->image)) {
            $newimage = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/uploads/award'), $newimage);
            $imagedestination = public_path('admin/uploads/award/') . $award->image;
            if (file_exists($imagedestination) && is_file($imagedestination)) {
                unlink($imagedestination);
            }
            $award->image =  $newimage;
          }
          $result = $award->save();
          if ($result) {
              return redirect('/admin/award')->withSuccess('Award detail Updated Successfully!');
          } else {
              return redirect('/admin/award')->withError('Unable to Update Award details!');
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $award = Award::find($id);
        if (!$award) {
            return redirect('admin/award')->withError('Award detail not found.');
        }
        $oldImagePath = public_path('/admin/upload/award/') . $award->image;
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {
            unlink($oldImagePath);
        }
        $result = $award->delete();
        if ($result) {
            return redirect('admin/award')->with('success', 'Award detail deleted successfully!');
        } else {
            return redirect('admin/award')->with('error', 'Award detail not deleted successfully!');
        } 
    }
}
