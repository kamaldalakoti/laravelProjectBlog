<?php

namespace App\Http\Controllers;

use App\Http\Resources\AutherResource;
use App\Models\authors;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function logOut(){
        Auth::logout();
        return redirect('/');


    }

    public function profile(Request $request){

        if (Auth::check()) {
            $data = Auth::user();
            return view('profile.profile', compact('data'));
        } else {
            return view('login');
        }
    }
    public function profile2(Request $request){

        if (Auth::check()) {
            $data = Auth::user();
            return $data;
        } else {
            return '';
        }
    }
    public function dashboard(){
        $data = Auth::user();
        $user_id = Auth::user()->id;
        if (authors::where('user_id','=', $user_id)->first() == null){
            authors::create([
                'user_id'=> $user_id,
            ]);
        }
        if (Auth::user()->role == 1) {
            $author = authors::query()->where('verified','=', null ||  0 )->with('user')->get();
//            print($author);
//            $author = AutherResource::collection($author);
//            dd($author);
//            return $author;
            return view('adminDashboard', compact('data' , 'author'));
        }
        else {
            return view('dashboard');
        }
    }
}
