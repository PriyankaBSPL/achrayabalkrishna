<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\ContactMail;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use App\Models\Admin\Language;
use App\Models\Admin\ContactUs;
use App\Models\Admin\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
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
       
        $SelectLanguages = Language::pluck('language', 'id');
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
        $SelectLanguages = Language::pluck('language', 'id');
        if (!$publications) {
            abort(404);
        }
        return view('frontend.book-detail', compact('publications', 'SelectLanguages'));
    }

    public function celebration()
    {
        return view('frontend.celebration');
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

    
}
