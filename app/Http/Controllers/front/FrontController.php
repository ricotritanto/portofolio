<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\about;
use App\services;
use App\skills;
use App\Experience;
use App\Education;
use App\Cv;
use PDF;
use Response;
use File;

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

    public function download_cv()
    {
        $filename = '1588082812cv.pdf';
        // $filename = $uploads['cv'];
        // print_r($filename);exit();
        $title = 'cv rico tritanto';
        $path = Storage_path('app/public/uploads/'.$filename);

        return Response::download(($path), $title, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
