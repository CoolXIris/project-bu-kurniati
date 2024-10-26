<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function review()
    {
        return view('review', ['activePage' => 'review']);
    }
    public function gadget()
    {
        return view('gadget', ['activePage' => 'gadget']);
    }
    public function laptop()
    {
        return view('laptop', ['activePage' => 'laptop']);
    }
    public function news()
    {
        return view('news', ['activePage' => 'news']);
    }
    public function tips()
    {
        return view('tips', ['activePage' => 'tips']);
    }
    public function recommended()
    {
        return view('recommended', ['activePage' => 'recommended']);
    }
}
