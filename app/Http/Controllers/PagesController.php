<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
      return view('home');
    }
    public function getAbout()
    {
      return view('about');
    }
    public function getHistories()
    {
      return view('histories');
    }
    public function getArticles()
    {
      return view('articles');
    }
    public function getContact()
    {
      return view('contact');
    }
    public function getSignIn()
    {
      return view('signin');
    }
    public function getSignUp()
    {
      return view('signup');
    }
}
