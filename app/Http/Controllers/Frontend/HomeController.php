<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Menu;
class HomeController extends Controller
{
    public function index(){
          return view('frontend.index');
    }
    public function celebration(){
        return view('frontend.celebration');
  }
}