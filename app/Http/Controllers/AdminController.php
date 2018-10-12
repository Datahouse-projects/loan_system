<?php

namespace App\Http\Controllers;

use App\Loan_type;
use App\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

   public function __construct()
   {
        $this->middleware('auth:admin');
   }

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
            'name' => $request->name,
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
    public function loan_types()
    {
        $loan_types= Loan_type::all();
        return view('admin.loans', ['loan_types' => $loan_types]);
    }
    public function createLoan_types()
    {
        return view('admin.addLoans');
    }

    public function addLoan_types(Request $request){

        //2.0 create  loan
        $loan_types = Loan_type::create([
            'description' => $request->description,
            'interest' => $request->interest,
            'interest_description' => $request->interest_description,
            'duration' => $request->duration,
            'min_no_people' => $request->min_no_people,
            'max_no_people' => $request->max_no_people,
            'processing_fee' => $request->processing_fee,
            'fine' => $request->processing_fee,
            'security_cover_ratio' => $request->security_cover_ratio,
        ]);

        $loan_types->save();
        return redirect()->intended(route('admin.loans'));

    }

    public function removeLoan_types($loan_types_id){

        DB::table('loan_types')->where('id',$loan_types_id)->delete();

        return redirect()->intended(route('admin.loans'));

    }




}
