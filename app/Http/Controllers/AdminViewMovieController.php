<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\video;

class AdminViewMovieController extends Controller
{
    //

    public function showPost()
    {
        $shares=DB::select('select * from movies');
        return view('pages.adminMovie',['movies'=>$shares]);
    } 

    function list() {
        $data=movie::all();
       // return view('adminBlog',['share'=>$data]);
    }

    function delete($id) {
        $data = movie::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function destroy($id) {
        DB::delete('delete from movies where id = ?',[$id]);
        return redirect()->back();
        }


}

