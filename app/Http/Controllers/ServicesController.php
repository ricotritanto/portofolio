<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::orderBy('created_at', 'DESC')->paginate(5);
        return view('services.index', compact('services'));
    }
    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string',
            'description' => 'nullable|string',

        ]);
        $services = Services::create([
                            'name' => $request->name,
                            'description'=> $request->description]);
        return redirect(route('services.index'))->with(['success' => 'New Services Added']);
    }

    public function edit($id)
    {
        $services = Services::find($id);
        return view('services.edit', compact('services'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'string',
            'description' => 'nullable|string',
        ]);

        $services = Services::find($id);
        $services->update([
            'name' => $request->name,
            'description'=> $request->description]);
        return redirect(route('services.index'))->with(['success' => 'Updated Success!!!']);
    }

    public function destroy($id)
    {
        $services = Services::find($id);
        $services->delete();
        return redirect(route('services.index'))->with(['success' => 'Delete Success!!!']);
    }
}
