<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title='News List';
        $data=News::orderBy('id','desc')->get();
        return view('admin.news.list',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title='Add News';
        return view('admin.news.add',compact('title'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= $request->validate([
            'title'=>'required',
            'description'=>'required',
            'date'=>'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'status'=>'required'
          ]);
      
          $news=new News;
          $news->title=$request->title;
          $news->description=$request->description;
          $news->date=$request->date;
          $news->read_more_link=$request->read_more_link;
          $news->status=$request->status;
          if (isset($request->image)) {
              $file = $request->file('image');
              $image = time() . '.' . $file->extension();
              $request->image->move(public_path('/admin/uploads/news_image'), $image);
              $news->image = $image; 
          }
          $result = $news->save();
          if ($result) {
              return redirect('/admin/news')->withSuccess('News detail added Successfully!');
          } else {
              return redirect('/admin/news')->withError('Unable to added News details!');
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
        $title = "Edit News";
        $data = News::find($id);
        return view('admin.news.edit',compact('title','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator= $request->validate([
            'title'=>'required',
            'description'=>'required',
            'date'=>'required',
            // 'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'status'=>'required'
          ]);
      
          $news=News::find($id);
          $news->title=$request->title;
          $news->description=$request->description;
          $news->date=$request->date;
          $news->read_more_link=$request->read_more_link;
          $news->status=$request->status;
          if (isset($request->image)) {
            $newimage = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/uploads/news_image'), $newimage);
            $imagedestination = public_path('admin/uploads/news_image/') . $news->image;
            if (file_exists($imagedestination) && is_file($imagedestination)) {
                unlink($imagedestination);
            }
            $news->image =  $newimage;
          }
          $result = $news->save();
          if ($result) {
              return redirect('/admin/news')->withSuccess('News detail Updated Successfully!');
          } else {
              return redirect('/admin/news')->withError('Unable to Update News details!');
          }
    

}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);

        // dd($notification);
        if (!$news) {
            return redirect('admin/news')->withError('News detail not found.');
        }
        $oldImagePath = public_path('/admin/upload/news_image/') . $news->image;
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {
            unlink($oldImagePath);
        }

        $result = $news->delete();

        if ($result) {
            return redirect('admin/news')->with('success', 'News detail deleted successfully!');
        } else {
            return redirect('admin/news')->with('error', 'News detail not deleted successfully!');
        }
    }
}
