<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
    	return view('pages.home');
    }
    public function about(){
    	return view('pages.about');
    }

    public function support(){
    	return view('pages.support');
    }

    public function cause(){
    	return view('pages.causes');
    }
    public function gallery(){
    	return view('pages.gallery');
    }
    public function events(){
    	return view('pages.events');
    }
}
