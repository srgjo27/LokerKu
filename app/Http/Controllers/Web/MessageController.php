<?php

namespace App\Http\Controllers\Web;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::where('user_id', Auth::guard('web')->user()->id)->orWhere('to', Auth::guard('web')->user()->id)->get();
        return view('pages.web.message.main', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);

        $messages = Message::where('user_id', Auth::guard('web')->user()->id)->orWhere('to', Auth::guard('web')->user()->id)->first();
        if ($messages) {
            $message = new Message;
            $message->user_id = Auth::guard('web')->user()->id;
            $message->parent_id = $messages->id;
            $message->to = 1;
            $message->message = $request->message;
            $message->save();
        } else {
            $message = new Message;
            $message->user_id = Auth::guard('web')->user()->id;
            $message->parent_id = null;
            $message->to = 1;
            $message->message = $request->message;
            $message->save();
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
