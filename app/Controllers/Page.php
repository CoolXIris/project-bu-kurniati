<?php namespace App\Controllers;

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
    public function recommended()
    {
        return view('recommended', ['activePage' => 'recommended']);
    }
    public function tips()
    {
        return view('tips', ['activePage' => 'tips']);
    }
    public function mediatek_dimensity9400()
    {
        return view('page/mediatek_dimensity9400');
    }
    public function chipset_exynos2200()
    {
        return view('page/chipset_exynos2200');
    }
    public function zte_blade()
    {
        return view('page/zte_blade');
    }
    public function vivo_x100pro()
    {
        return view('page/vivo_x100pro');
    }
    
}
?>