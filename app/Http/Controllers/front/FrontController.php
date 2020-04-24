<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\about;
use App\services;
use App\skills;
use App\Experience;
use App\Education;

class FrontController extends Controller
{
    public function index()
    {
        $about = About::Orderby('created_at','DESC')->first();
        $skills = skills::Orderby('created_at','DESC')->get();
        $education = Education::Orderby('created_at','DESC')->get();
        $experience = Experience::Orderby('created_at','DESC')->get();
        return view('front.index', compact('about','skills','education','experience')); 
    }
}
