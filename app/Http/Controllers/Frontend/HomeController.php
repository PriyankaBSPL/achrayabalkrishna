<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use App\Models\Admin\Language;
use App\Models\Admin\Publication;
use App\Http\Controllers\Controller;
use App\Models\Admin\News;
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

    }

}
