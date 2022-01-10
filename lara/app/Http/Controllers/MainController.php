<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function review()
    {
        $rew = new ReviewModel();
        return view('review', ['rew' => $rew->all()]);
    }

    public function review_check(Request $request)
    {
        // dd($request);
        $valid = $request->validate([
            'email' => 'required|min:4',
            'subject' => 'required|max:10',
            'message' => 'required|min:6'
        ]);

        $review = new ReviewModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
