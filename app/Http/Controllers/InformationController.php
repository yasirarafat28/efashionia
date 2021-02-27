<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class InformationController extends Controller
{
    //

    public function information($type)
    {
        $content = Content::where('type',$type)->first();
        $inner_page = ucwords(str_replace('_',' ',$content->title??'About Us'));

        if ($type =='contact') {
            return view('front.contact',compact('content','inner_page'));
        }else{
            return view('front.information',compact('content','inner_page'));
        }
    }
}
