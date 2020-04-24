<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\education;

class EducationController extends Controller
{
    public function index()
    {
        $education = education::orderBy('created_at', 'DESC')->paginate(5);
        return view('education.index', compact('education'));
    }
    public function create()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string',
            'title' => 'string',
            'description' => 'nullable|string',

        ]);
        $education = education::create([
                            'name' => $request->name,
                            'title' => $request->title,
                            'description'=> $request->description]);
        return redirect(route('education.index'))->with(['success' => 'New education Added']);
    }

    public function edit($id)
    {
        $education = education::find($id);
        return view('education.edit', compact('education'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'string',
            'title' => 'string',
            'description' => 'nullable|string',
        ]);

        $education = education::find($id);
        $education->update([
            'name' => $request->name,
            'title' => $request->title,
            'description'=> $request->description]);
        return redirect(route('education.index'))->with(['success' => 'Updated Success!!!']);
    }

    public function destroy($id)
    {
        $education = education::find($id);
        $education->delete();
        return redirect(route('education.index'))->with(['success' => 'Delete Success!!!']);
    }
}
