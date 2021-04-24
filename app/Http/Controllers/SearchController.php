<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Trainer;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    public function trainerSearch(Request $request) {
        $obj=new Trainer();
        if($request->input('trainerSearch')){
            $name=$request->input('trainerSearch');
            $trainerSearch=$obj->search($name);
            
        return view('search',['trainerSearch'=>$trainerSearch]);
        }
        return view('search',[]);
    }
}
