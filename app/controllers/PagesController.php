<?php

namespace App\Controllers;

class PagesController{
    
    public function home()
    {
        //Receive the request
        //Delegate
        //Return the response.
        //die('home');

        // require 'views/index.view.php';

        // , ['users' => $users]
        return view('index');
    }

    public function about()
    {
        // require 'views/about.view.php';

        $author = 'MinhThai';
        return view('about', ['author' => $author]);
    }

    public function contact()
    {
        // require 'views/contact.view.php';
        return view('contact');
    }
} 