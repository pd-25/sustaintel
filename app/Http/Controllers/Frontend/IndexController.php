<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController
{
    public function index()
    {
        return view('frontend.index');
    }

    public function aboutUs()
    {
        return view('frontend.aboutUs');
    }

    public function career()
    {
        return view('frontend.career');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function envImpactService()
    {
        return view('frontend.envImpactService');
    }


    public function envDueService()
    {
        return view('frontend.envDueService');
    }

    public function esmMonitService()
    {
        return view('frontend.esmMonitService');
    }

    public function susRepotService()
    {
        return view('frontend.susRepotService');
    }

    public function supChainService()
    {
        return view('frontend.supChainService');
    }

    
    
}
