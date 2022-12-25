<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Auth;

class FeedbackController extends Controller
{
    public function getIndex() {
        $feedbacks = Feedback::all();
        return view('feedback', compact('feedbacks'));
    }

    public function postIndex(Request $request) {
        $request['user_id'] = (Auth::guest()) ? 0 : Auth::user()->id;
        Feedback::create($request->all());
        return redirect()->back();
    }
}
