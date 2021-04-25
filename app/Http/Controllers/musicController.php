<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\music;

class musicController extends Controller
{
    public function showMusic()
    {
        $musics=DB::table('music')->get()->toArray();
        return view('pages.music',['music'=>$musics]);
    }
    public function storeMusic(Request $request)
    {
        $data=new music;
        if($request->file('Music_Audio_File')||$request->file('Music_Image')){
            $file_audio=$request->file('Music_Audio_File');
            $file_image=$request->file('Music_Image');
         
            $filename_audio=time().'.'.$file_audio->getClientOriginalExtension();
            $filename_image=time().'.'.$file_image->getClientOriginalExtension();
            
            $request->file('Music_Audio_File')->move('storage/',$filename_audio);
            $request->file('Music_Image')->move('storage/',$filename_image);
            
            $data->Music_Audio_File=$filename_audio;
            $data->Music_Image=$filename_image;
        }
        $data->Music_Name=$request->Music_Name;
        $data->Music_Singer=$request->Music_Singer;
        $data->save();
        return redirect()->back();

        
    }
    public function showAll()
    {
        $music=music::all();
        return view('pages.music',compact($music));
    }
        
}
