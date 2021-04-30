<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\music;

class AdminViewMusicController extends Controller
{
    //

    public function showPost()
    {
        $shares=DB::select('select * from music');
        return view('pages.adminMusic',['music'=>$shares]);
    } 

    function list() {
        $data=music::all();
       // return view('adminBlog',['share'=>$data]);
    }

    public function deletem($id) {
        $data = music::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function destroy($id) {
        DB::delete('delete from music where id = ?',[$id]);
        return redirect()->back();
        }


}
