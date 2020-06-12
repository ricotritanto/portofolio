<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = experience::orderBy('created_at', 'DESC')->paginate(5);
        return view('experience.index', compact('experience'));
    }

    public function create()
    {
        return view('experience.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'description' => 'string|required'

        ]);
        $experience = experience::create([
                            'name' => $request->name,
                            'description'=> $request->description]);
        return redirect(route('experience.index'))->with(['success' => 'New experience Added']);
    }

    public function edit($id)
    {
        $experience = experience::find($id);
        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'description' => 'string|required'

        ]);
        $experience = experience::find($id);
        $experience->update([
                            'name' => $request->name,
                            'description'=> $request->description]);
        return redirect(route('experience.index'))->with(['success' => 'Update Success']);
    }

    public function destroy($id)
    {
        $experience = experience::find($id);
        $experience->delete();
        return redirect(route('experience.index'))->with(['success' => 'Ddelete Success !!!']);
    }
}
