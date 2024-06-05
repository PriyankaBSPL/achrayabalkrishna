<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Menu;

class IndexController extends Controller
{
    public function index($slug="",Request $request){
        $slug= clean_single_input($slug);
        if($slug==''){
                return redirect('/');  
        }
        $data =  Menu::where('slug', $slug)->where('status',3)->first();
        $title=$data->title;
        $banner_image=$data->banner_image;
        if(!empty($data)){
            if($slug==$data->slug){
                return response()->view("frontend/$data->slug",compact('title','banner_image')); 
            }
        }

    }
}
