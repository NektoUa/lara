<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function review()
    {
        return view('review');
    }

    public function review_check(Request $request)
    {
        // dd($request);
        $valid = $request->validate([
            'email' => 'required|min:4',
            'subject' => 'required|max:10',
            'message' => 'required|min:6'
        ]);
    }
}
