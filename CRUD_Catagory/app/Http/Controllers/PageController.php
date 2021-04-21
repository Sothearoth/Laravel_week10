<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function welcome(){
        return view('Page.welcome');
    }

    function aboutUs(){
        return view('Page.aboutUs');
    }

    function blog_single(){
        return view('Page.blog-single');
    }

    function blog(){
        return view('Page.blog');
    }
    function contact(){
        return view('Page.contact');
    }
    function portfolio(){
        return view('Page.portfolio');
    }
    function pricing(){
        return view('Page.pricing');
    }
    function services(){
        return view('Page.services');
    }
    function team(){
        return view('Page.team');
    }

    function testimonials(){
        return view('Page.testimonials');
    }

    

}
