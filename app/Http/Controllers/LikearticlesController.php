<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summernote;
use App\Likearticle;

class LikearticlesController extends Controller
{
    function like($id){
        Likearticle::create([
         
            'summernote_id'=>$id,

        ]);
        return redirect()->back();
    }

    function unlike($id){
        $like=Likearticle::where('summernote_id',$id)->first();
        $like->delete();
        return redirect()->back();
    }
}
