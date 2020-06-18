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
        $data = cv::find($id);
        $data->delete();
        return redirect(route('uploads.index'))->with(['success' => 'Delete Success!!!']);

    }

    public function show($id)
    {
        $uploads = cv::find($id);
        // $filename = $uploads['cv'];
        $filename = $uploads['cv'];
        // print_r($filename);exit();
        $path = Storage_path('app/public/storage/'.$filename);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }

    public function edit($id)
    {
        $data = cv::find($id);
        return view('uploads.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'cv' => 'mimes:pdf']);
        
        $data = cv::find($id);
        $filename = $data->cv;
        if($request->hasFile('cv'))
        {
            $file = $request->file('cv'); // simpan sementara divariabel
            $filename = time().$request->name.'.'. $file->getClientOriginalExtension();
            $file->storeAs('public/uploads', $filename);
            File::delete(storage_path('app/public/storage/' .$data->cv));
        }
            $data->update([
                'name' => $request->name,
                'cv' => $filename
            ]);
            return redirect(route ('uploads.index'))->with(['success'=> 'Update Success !']);
    }

}
