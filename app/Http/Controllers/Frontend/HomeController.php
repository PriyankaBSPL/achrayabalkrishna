<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use App\Models\Admin\Language;
use App\Models\Admin\Publication;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function publication($slug, $id)
    {
        $publications = Publication::with('menu')->where('publication_type', $id)->orderBy('id', 'DESC')->get();
        $SelectLanguages = Language::pluck('language', 'id');
        return view('frontend.publication', compact('publications', 'SelectLanguages'));
    }

    public function show($id,Request $request)
    {
        $publications = Publication::find($id); 
        $SelectLanguages = Language::pluck('language', 'id');
        if (!$publications) {
            abort(404);
        }
        $previousUrl = $request->server('HTTP_REFERER');
        return view('frontend.book-detail', compact('publications','SelectLanguages','previousUrl'));
    }
}
