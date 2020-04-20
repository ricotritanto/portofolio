<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Skills;

class SkillController extends Controller
{
    public function index()
    {
        $skills= Skills::OrderBy('created_at','DESC')->paginate(5);
        return view('skills.index', compact('skills'));
    }
    
    public function create()
    {
        return view('skills.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'progress' => 'required|integer|max:100',

        ]);
        $skills = skills::create([
                            'name' => $request->name,
                            'progress'=> $request->progress]);
        return redirect(route('skills.index'))->with(['success' => 'New Skills Added']);
    }

    public function edit($id)
    {
        $skills = Skills::find($id);
        return view('skills.edit', compact('skills'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'progress' => 'required|integer|max:100',

        ]);
        $skills = Skills::find($id);
        $skills->update([
            'name' => $request->name,
            'progress'=> $request->progress]);
        return redirect(route('skills.index'))->with(['success' => 'Updated Skills Added']);
    }

    public function destroy($id)
    {
        $skills = Skills::find($id);
        $skills->delete();
        return redirect(route('skills.index'))->with(['success' => 'Deleted Skills Success!']);
    }
}
