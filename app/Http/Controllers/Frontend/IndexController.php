<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Menu;

class IndexController extends Controller
{
    public function index($slug="",Request $request){
    //   print_r($slug);exit;
        $slug= clean_single_input($slug);
        if($slug=='Frontend'){
                return redirect('/');  
        }
        $data =  Menu::where('slug', $slug)->where('status',3)->first();
        $title=$data->title;
        if(!empty($data)){
            if($slug==$data->slug){
                return response()->view("frontend/$data->slug",compact('title')); 
            }
        }
   

    }
}
