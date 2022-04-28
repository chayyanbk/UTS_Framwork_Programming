<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function Home()
    {
        return view('Home');
    }
    public function About()
    {
        return view('About');
    }
    public function Contact()
    {
        return view('Contact');
    }
}

