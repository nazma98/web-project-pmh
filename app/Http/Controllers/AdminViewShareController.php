<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Share;
use App\Models\Music;

class AdminViewShareController extends Controller
{
    //

    public function showPost()
    {
        $shares=DB::select('select * from shares');
        return view('pages.adminBlog',['shares'=>$shares]);
    } 

    function list() {
        $data=Share::all();
       // return view('adminBlog',['share'=>$data]);
    }

    function delete($id) {
        $data = Share::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function destroy($id) {
        DB::delete('delete from shares where id = ?',[$id]);
        return redirect()->back();
        }


}
