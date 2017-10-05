<?php

namespace App\Controllers;

class PagesController{
    
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $author = 'MinhThai';
        return view('about', ['author' => $author]);
    }

    public function contact()
    {
        return view('contact');
    }
} 