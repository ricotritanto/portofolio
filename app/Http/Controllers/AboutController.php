<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::orderBy('created_at', 'DESC')->firstOrNew();
        return view('about.index', compact('about'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'nullable|string',

        ]);

        $about = about::updateOrCreate([
            'description' => $request->description,
        ]);
        // $about->save();
        return redirect(route('about.index'))->with(['success' => 'About Added']);
    }
}
