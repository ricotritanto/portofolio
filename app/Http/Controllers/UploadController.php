<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Response;
use File;
use App\Cv;
use PDF;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = cv::orderBy('created_at', 'DESC')->paginate(5);
        return view('uploads.index', compact('uploads'));
    }

    public function create()
    {
        return view('uploads.upload');

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'cv' => 'required|mimes:pdf']);
         //jika filenya ada
         if($request->hasFile('cv')){
            $file = $request->file('cv'); // simpan sementara divariabel
            $filename = time().$request->name.'.'. $file->getClientOriginalExtension();
            $file->storeAs('public/uploads', $filename);

            $cv = Cv::Create([
                'name' => $request->name,
                'cv' => $filename
            ]);

            return redirect(route ('uploads.index'))->with(['success'=> 'Upload Success !']);
        }
    }

    public function destroy($id)
    {

    }

    public function show($id)
    {
        $uploads = cv::find($id);
        $filename = "15881374481.pdf";
        $path = storage_path($filename);

        return PDF::loadFile(public_path().'/15881374481.pdf')->save('/path-to/15881374481.pdf')->stream('15881374481.pdf');
    }
}
