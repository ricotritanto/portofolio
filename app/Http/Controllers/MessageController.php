<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Messages;
use Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = messages::orderBy('created_at', 'DESC')->paginate(5);
        return view('message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messages = Messages::find($id);
        return view('message.readmail', compact('messages'));
    }

    public function reply($id)
    {
        $messages = Messages::find($id);
        return view('message.reply', compact('messages'));
    }

    public function send(Request $request)
    {
        try{
            Mail::send('message.email',['email'=>$request->tomail, 'description'=>$request->description],
                    function($message) use ($request)
                    {
                        $message->subject($request->subject);
                        $message->from('masjackdotcom@gmail.com','masjackdotcom');
                        $message->to($request->tomail);
                    });
                    return back()->with(['success' => 'Sending Email Success !!']);
        }catch (Exception $e)
        {
            return response(['status' => false, 'errors' => $e->getMessage()]);
        }

    }
    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $messages = Messages::find($id);
        $messages->delete();
        return redirect(route('message.index'))->with(['success' => 'Delete Success!!!']);
    }
}
