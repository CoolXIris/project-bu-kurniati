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
    public function robotaxi()
    {
        return view('page/robotaxi');
    }
    public function oppo_campus()
    {
        return view('page/oppo_campus');
    }
    public function permata_me()
    {
        return view('page/permata_me');
    }
    public function tv_samsung()
    {
        return view('page/tv_samsung');
    }
    public function inflection_ai()
    {
        return view('page/inflection_ai');
    }
    public function diablo_iv()
    {
        return view('page/diablo_iv');
    }
    
}
?>