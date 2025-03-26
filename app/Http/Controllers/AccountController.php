<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AccountController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        $media_arr = [];
        //http://localhost:8000/storage/1/1665560445587.jpeg
        foreach(Auth::user()->getMedia('avatar') as $medi){
            $media_arr[]=asset('storage/'.$medi['id'].'/'.$medi['file_name']);
        }
        return view('account', compact('media_arr'));
    }  
    public function postFile(Request $request) {
        Auth::user()->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        return redirect()->back();
    }

    public function postAccount(Request $request) {
        // dd($request->all());
        // $user = Auth::user();
        // $user->user_id = $request->id;
        // $user->user_name = $request->user_name;
        // $user->email = $request->email;
        // $user->phone = $request->phone;
        // $user->country = $request->country;
        // $user->city = $request->city;
        // $user->address = $request->address;
        // $user->save();

        $filtered = array_filter(
            $request->all(), 
            function($val){ 
              return $val !== '_token';
            },
            ARRAY_FILTER_USE_KEY,
        );

        $filtered = array_filter($filtered);

        $user_id = Auth::user()->id;
        User::where('id', $user_id)->update($filtered);
        
        return redirect()->to("/"); 
    }
}
