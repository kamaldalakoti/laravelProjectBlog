<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AutherResource;
use App\Models\authors;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\HttpFoundation\Session\Storage\save;


class apiController extends Controller
{
    public function authorRequest(Request $request){
        Auth::check();
        if ( Auth::user()->role == 1){
            $user_id = $request['user_id'];
            print($user_id);
            $author  = authors::find($user_id);
            $author->verified = 1;
            $author->save();

            return redirect('dashboard');

        }
        else{
            return redirect('dashboard');
        }

    }
}
