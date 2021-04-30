<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\video;

class AdminViewVideoController extends Controller
{
    //

    public function showPost()
    {
        $shares=DB::select('select * from videos');
        return view('pages.adminVideo',['videos'=>$shares]);
    } 

    function list() {
        $data=video::all();
       // return view('adminBlog',['share'=>$data]);
    }

    function delete($id) {
        $data = video::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function destroy($id) {
        DB::delete('delete from videos where id = ?',[$id]);
        return redirect()->back();
        }


}

