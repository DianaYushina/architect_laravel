<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Auth;

class FeedbackController extends Controller
{
    public function getIndex() {
        $feedbacks = Feedback::all();
        // $media_arr = [];
        //http://localhost:8000/storage/1/1665560445587.jpeg
        // foreach($feedbacks as $feedback) {
        //     dd($feedback->user()->getMedia('avatar'));
        //     foreach($feedback->user()->getMedia('avatar') as $medi){
        //         $media_arr[]=asset('storage/'.$medi['id'].'/'.$medi['file_name']);
        //     }
        // }

        // foreach(Auth::user()->getMedia('avatar') as $medi){
        //     $media_arr[]=asset('storage/'.$medi['id'].'/'.$medi['file_name']);
        // }
        
        // dd($media_arr);
        return view('feedback', compact('feedbacks'));
    }

    public function postIndex(Request $request) {
        $request['user_id'] = (Auth::guest()) ? 0 : Auth::user()->id;
        Feedback::create($request->all());
        return redirect()->back();
    }
}
