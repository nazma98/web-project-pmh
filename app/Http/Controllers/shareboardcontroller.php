<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shareboardcontroller extends Controller
{
    public function showPost()
    {
        $shares=DB::table('shares')->get()->toArray();
        return view('pages.seepost',['shares'=>$shares]);
    }
    public function doShare(Request $request)
    {
        $message='';
        $inputs=$request->all();
        $res=DB::table('shares')->insert([
            'title'=>$inputs['title'],
            'topic'=>$inputs['topic'],
            'body'=>$inputs['body'],
            'link'=>$inputs['link'],
        ]);
        if($res){
            $message="Post Executated Successfully.";
        }else
        {
            $message="Post Executation Failed!Please Try Again.....";
        }
            return view('pages.sharepost',['message'=>$message]);
    }
}
