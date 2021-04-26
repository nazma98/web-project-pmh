<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\movie;

class movieController extends Controller
{
   public function showMovie()
    {
        $movies=DB::table('movies')->get()->toArray();
        return view('pages.movies',['movies'=>$movies]);
    }
    public function storeMovie(Request $request)
    {
        $data=new movie;
        if($request->file('Movie_Image')){
            
            $file_image=$request->file('Movie_Image') ;
         
            $filename_image=time().'.'.$file_image->getClientOriginalExtension();
            
            $request->file('Movie_Image')->move('storage/',$filename_image);
            
            $data->Movie_Image=$filename_image;
        }
        $data->Movie_Name=$request->Movie_Name;
        $data->Movie_Director=$request->Movie_Director;
        $data->Movie_Description=$request->Movie_Description;
        $data->Movie_Link=$request->Movie_Link;
        $data->save();
        return redirect()->back();

    }
        public function searchMovie()
    {
        $search_movie=$_GET['search'];
        $movies=movie::where('Movie_Name',"like",'%'.$search_movie.'%')->get();
        return view('pages.searchmovie',['movies'=>$movies]);
    }
}
