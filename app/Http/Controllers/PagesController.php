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
    	return view('pages.abouterror');
    }

    public function support(){
    	return view('pages.support');
    }

    public function cause(){
    	return view('pages.causes');
    }
    public function media(){
    	return view('pages.gallery');
    }
    public function events(){
    	return view('pages.events');
    }

    public function volunteer(){
        return view('pages.volunteer');
    }

    public function recent(){
        return view('pages.recent');
    }
}
