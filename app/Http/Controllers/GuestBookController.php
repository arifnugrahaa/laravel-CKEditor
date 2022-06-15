<?php

namespace App\Http\Controllers;

use App\GuestBook;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function index(){

        $guestbooks = GuestBook::latest()->get();

        return view('index', [
            'guestbooks' => $guestbooks
        ]);
    }

    public function store(Request $request)
    {
        GuestBook::create([
            'name' => $request->name,
            'message' => $request->message
        ]);

        return redirect()->back();
    }
}
