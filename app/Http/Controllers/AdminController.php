<?php

namespace App\Http\Controllers;

use App\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

   //public function __construct()
   //{
     //   $this->middleware('auth:admin');
   // }

    //page showing list of officers
    public function index()
    {
        $officers= Officer::all();
        return view('admin.officers', ['officers' => $officers]);
    }
    public function createOfficer()
    {
        return view('admin.add');
    }

    public function addOfficer(Request $request){

        //1.0 create  officer
        $officer = Officer::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make( "officer123") ,
            'role' => $request->role ,
        ]);

        $officer->save();
        return redirect()->intended(route('admin'));

    }

    public function removeOfficer($officer_id){

        DB::table('officers')->where('id',$officer_id)->delete();

        return redirect()->intended(route('admin'));

    }


}
