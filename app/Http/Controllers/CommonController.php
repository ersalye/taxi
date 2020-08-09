<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{

    public function help()
    {
        return view('user.layout.help');

    } 

    public function about_us()
    {
        return view('user.layout.about_us');

    }

    public function contact_us()
    {
        return view('user.layout.contact_us');

    }

    public function terms()
    {
        return view('user.layout.terms');

    }

    public function privacy()
    {
        return view('user.layout.privacy');

    }

    public function user()
    {
        return view('user.layout.user');

    }

    public function driver()
    {
        return view('user.layout.driver');

    }


}
