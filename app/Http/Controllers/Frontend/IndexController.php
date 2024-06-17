<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Menu;
use App\Models\Admin\Year;
use App\Models\Admin\Award;
use Illuminate\Http\Request;
use App\Models\Admin\ResearchPaper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index($slug = "", Request $request)
    {
        $slug = clean_single_input($slug);
        if ($slug == '') {
            return redirect('/');
        }
        $data =  Menu::where('slug', $slug)->where('status', 3)->first();
        $title = $data->title;
        $banner_image = $data->banner_image;

        if (!empty($data)) {
            if ($slug == $data->slug && $slug != 'awards' && $slug != 'research-papers' && $slug != 'video-gallery') {
                return response()->view("frontend/$data->slug", compact('title', 'banner_image'));
            } else if ($slug == 'awards') {
                   $data=Award::orderBy('id','desc')->get();
                return response()->view("frontend/awards", compact('title', 'banner_image', 'data'));
            } else if ($slug == 'research-papers') {
                $SelectYears = Year::orderBy('year', 'desc')->pluck('year', 'id');
                $researchs = ResearchPaper::orderBy('id', 'desc')->get();
                return view('frontend.research-papers', compact('researchs', 'SelectYears', 'title'));
                
            } else if ($slug == 'video-gallery') {
                $apiKey = env('YOUTUBE_API_KEY');
                $channelId = env('YOUTUBE_CHANNEL_ID');
                $maxResults = 12; // Number of videos to fetch initially

                // Fetch videos from YouTube API
                $response = Http::get('https://www.googleapis.com/youtube/v3/search', [
                    'key' => $apiKey,
                    'channelId' => $channelId,
                    'part' => 'snippet,id',
                    'order' => 'date',
                    'maxResults' => $maxResults,
                ]);
                // dd($response);
                $videos = $response->json();
                //    dd($videos);
                return view('frontend.video-gallery', compact('videos'));
            }
        }
    }
}
