<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\video;

class videoController extends Controller
{
   public function showVideo()
    {
        $video=DB::table('videos')->get()->toArray();
        return view('pages.videos',['videos'=>$video]);
    }
    public function storeVideo(Request $request)
    {
        $data=new video;
        if($request->file('Video_Image')){
            
            $file_image=$request->file('Video_Image') ;
         
            $filename_image=time().'.'.$file_image->getClientOriginalExtension();
            
            $request->file('Video_Image')->move('storage/',$filename_image);
            
            $data->Video_Image=$filename_image;
        }
        $data->Video_Name=$request->Video_Name;

        $data->Video_Link=$request->Video_Link;
        $data->save();
        return redirect()->back();

    }
}
