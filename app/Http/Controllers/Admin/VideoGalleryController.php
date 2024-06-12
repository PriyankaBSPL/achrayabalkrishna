<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class VideoGalleryController extends Controller
{

    // public function fetchVideos(Request $request)
    // {
    //     $apiKey = env('YOUTUBE_API_KEY');
    //     $query = $request->input('query');

    //     $response = Http::get('https://www.googleapis.com/youtube/v3/search', [
    //         'part' => 'snippet',
    //         'type' => 'video',
    //         'q' => $query,
    //         'key' => $apiKey,
    //     ]);
    //     // dd(  $response);

    //     $videos = $response->json()['items']; // Assuming 'items' contains an array of videos

    //     dd($videos);
    //     return view('frontend/video-gallery', ['videos' => $videos]);
    // }

    public function showVideoGallery()
    {
        return view('frontend/video-gallery');
    }

    // ==========================================================

    public function index()
    {
        // Get API key and channel ID from the .env file
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
       dd($videos);
        return view('frontend.video', compact('videos'));
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

    // ===================================================================


    // public function index(Request $request)
    // {
    //     // Get API key and channel ID from the .env file
    //     $apiKey = env('YOUTUBE_KEY');
    //     $channelId = env('CHANNEL_ID');
    //     $maxResults = 12; // Number of videos to fetch initially

    //     // Get the page token from the request
    //     $pageToken = $request->input('pageToken');

    //     // Fetch videos from YouTube API
    //     $response = Http::get('https://www.googleapis.com/youtube/v3/search', [
    //         'key' => $apiKey,
    //         'channelId' => $channelId,
    //         'part' => 'snippet,id',
    //         'order' => 'date',
    //         'maxResults' => $maxResults,
    //         'pageToken' => $pageToken, // Include the page token
    //     ]);

    //     if ($response->failed()) {
    //         // Handle the error, maybe log it or return an error response
    //         return response()->json(['error' => 'Failed to fetch videos'], 500);
    //     }

    //     $videos = $response->json();

    //     // Check if the 'items' key exists in the response
    //     if (!isset($videos['items'])) {
    //         // Handle the case where 'items' key is not present
    //         return response()->json(['error' => 'Videos not found in response'], 500);
    //     }

    //     return view('frontend.video', compact('videos'));
    // }

}
