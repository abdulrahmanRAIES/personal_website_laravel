<?php

namespace App\Http\Controllers\FrontEnd;

use App\About;
use App\Education;
use App\Experience;
use App\Skil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function index(){

        $about=About::first();
        $experiences=Experience::all();
        $educations=Education::all();
        $skils=Skil::all();
        return view('FrontEnd.index',compact('about','experiences','educations','skils'));
    }

    
    public function dashborad(){
        return view('pages.dashborad');
    }
}
