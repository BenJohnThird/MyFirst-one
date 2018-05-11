<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Ben John | Laravel';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About Ben John';
        return view('pages.about')->with('title',$title);;
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Game Development','Software Development']
        );
        return view('pages.services')->with($data);;
    }
}
;
