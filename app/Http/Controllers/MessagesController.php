<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function index( Message $message )
    {
        return view('messages.index', compact('message'));
    }
    public function create( Message $message )
    {
        return view('messages.create');//, compact('message'));
    }
}
