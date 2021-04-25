<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    //
    public function addData(Request $req){
        $donor=new Donor;
        $donor->name=$req->name;
        $donor->email=$req->email;
        $donor->address=$req->address;
        $donor->contact_no=$req->contact_no;
        $donor->want_to_donate=$req->want_to_donate;
        $donor->blood_group=$req->blood_group;
        $donor->save();
        return redirect('add');
    }
    public function show()
        {
            $data= Donor::all();
            return view('pages.showdonor',['donors'=>$data]); 
        }

}
