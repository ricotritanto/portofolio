<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
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
            'cv' => 'required|mimes:pdf|max:2048']);
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
        $vitae = $uploads->cv;
        // print_r ($vitae);exit();
        $path = storage_path('app'.'/'.'public'.'/'.'uploads'.'/'.$vitae);

        return Response::make(file_get_contents($path), 200, [

            'Content-Type'
        => 'application/pdf',        
        'Content-Disposition' => 'inline; filename="'.$vitae.'"'

        ]);
    }
}
