<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\ContactMail;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use App\Models\Admin\Language;
use App\Models\Admin\ContactUs;
use App\Models\Admin\Publication;
use App\Models\Admin\PhotoCategory;
use App\Models\Admin\PhotoGallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


use App\Models\Admin\News;
class HomeController extends Controller
{
    public function index()
    {
        $data=News::orderBy('id','desc')->get();
        return view('frontend.index',compact('data'));
    }


    public function publication($slug, $id, Request $request)
    { 
        $languageSelector = $request->input('languageSelector');
        $search = $request->input('search');

        $query = Publication::with('menu')->where('publication_type', $id);
        
        if (!empty($search)) {
            $query->where('title', 'LIKE', "%$search%");
        }

        if (!empty($languageSelector)) {
            $query->where('language', $languageSelector);
        }

        $publications = $query->orderBy('id', 'DESC')->get();
       
        $SelectLanguages = Language::orderBy('language', 'asc')->pluck('language', 'id');
        return view('frontend.publication', compact('publications', 'SelectLanguages', 'search', 'languageSelector','slug'));
    }

    // public function publication($slug, $id)
    // {
    //     $publications = Publication::with('menu')->where('publication_type', $id)->orderBy('id', 'DESC')->get();
    //     $SelectLanguages = Language::pluck('language', 'id');
    //     return view('frontend.publication', compact('publications', 'SelectLanguages'));
    // }

    public function show($id, Request $request)
    {
        $publications = Publication::find($id);
        $SelectLanguages = Language::orderBy('language', 'asc')->pluck('language', 'id');
        if (!$publications) {
            abort(404);
        }
        //$previousUrl = $request->server('HTTP_REFERER');
        return view('frontend.book-detail', compact('publications', 'SelectLanguages'));
    }

    public function celebration()
    {
        return view('frontend.celebration');
  }
  public function news(){
    $data=News::orderBy('id','desc')->get();
    return view('frontend.news',compact('data'));
}

   


    public function contactsave(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'sub' => 'required|max:255',
            'msg' => 'required'
        ], [
            'sub.required' => 'The subject field is required.',
            'msg.required' => 'The message field is required.'
        ]);

        // Creating a new contact record
        $contact = new ContactUs();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->sub = $validatedData['sub'];
        $contact->msg = $validatedData['msg'];
        $contact->save();

        
        // Sending an email
        $recipient = "zalapriyanka1997@gmail.com";
        Mail::to($recipient)->send(new ContactMail(
            $validatedData['name'],
            $validatedData['email'],
            $validatedData['sub'],
            $validatedData['msg']
        ));

        $msg = 'Your contact detail have been saved successfully.';

        return back()->with('success', $msg);
    }
    public function gallery(){
        $title='Image Gallery';
        $photocategory_data =  PhotoCategory::where(['parent_id'=> 0])->orderBy('cat_postion', 'ASC')->get();
        
        return view('frontend.gallery',compact('title','photocategory_data'));
    }
    public function photo_gallery_details($event_id)
    {
        $photoCategory = PhotoCategory::find($event_id);
        $cat_descriptions = $photoCategory->cat_descriptions;
        $title = $photoCategory->title;
        $photoGallery = PhotoGallery::where('event_id', $event_id)->orderBy('img_postion', 'ASC')->get();
        return response()->view("frontend/photo_gallery_details", compact('title', 'photoGallery', 'cat_descriptions'));
    }
    public function sub_photo_gallery($parent_id)
    {
        $data = '';
        $photocategory_data =  PhotoCategory::where(['parent_id'=>$parent_id])->get();
        $title_data =  PhotoCategory::where(['parent_id'=>$parent_id])->get()->first();
        $cat_descriptions = $title_data->cat_descriptions;
        $title = $title_data->title;
        return response()->view("frontend/gallery", compact('title', 'data', 'cat_descriptions', 'photocategory_data'));
    }
    
}


