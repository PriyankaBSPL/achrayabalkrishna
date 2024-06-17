<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\ContactMail;
use App\Models\Admin\Menu;
use App\Models\Admin\News;
use App\Models\Admin\Year;
use Illuminate\Http\Request;
use App\Models\Admin\Language;
use App\Models\Admin\ContactUs;
use App\Models\Admin\Publication;
use App\Models\Admin\PhotoGallery;
use App\Models\Admin\PhotoCategory;


use App\Models\Admin\ResearchPaper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $data = News::orderBy('id', 'desc')->get();
        return view('frontend.index', compact('data'));
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
        return view('frontend.publication', compact('publications', 'SelectLanguages', 'search', 'languageSelector', 'slug'));
    }

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

    public function news()
    {
        $data = News::orderBy('id', 'desc')->get();
        return view('frontend.news', compact('data'));
    }

    public function research_papers()
    {
        $title = 'research paper';
        $SelectYears = Year::orderBy('year', 'desc')->pluck('year', 'id');
        $researchs = ResearchPaper::orderBy('id', 'desc')->get();
        return view('frontend.research-papers', compact('researchs', 'SelectYears', 'title'));
    }

    public function fetchMoreVideos(Request $request)
    {
        $apiKey = env('YOUTUBE_API_KEY');
        $channelId = env('YOUTUBE_CHANNEL_ID');
        $maxResults = 12;
        $nextPageToken = $request->get('nextPageToken');
    
        $response = Http::get('https://www.googleapis.com/youtube/v3/search', [
            'key' => $apiKey,
            'channelId' => $channelId,
            'part' => 'snippet,id',
            'order' => 'date',
            'maxResults' => $maxResults,
            'pageToken' => $nextPageToken,
        ]);
    
        $videos = $response->json();
        $html = '';
    
        foreach ($videos['items'] as $video) {
            $html .= '<div class="col-md-4">
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/' . $video['id']['videoId'] . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <h5 class="mt-2">' . $video['snippet']['title'] . '</h5>
                      </div>';
        }
    
        $data = [
            'html' => $html,
            'nextPageToken' => $videos['nextPageToken'] ?? null,
        ];
    
        return response()->json($data);
    }
 
}
