<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Customer;
use App\Guarantor;
use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfficerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
   {
     $this->middleware('auth:officer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans= DB::table('loans')->where('status', 'pending')->get();
        return view('officer.pending-requests', ['loans' => $loans]);
    }

    public function showPendingLoans()
    {

        $loans= DB::table('loans')->where('status', 'pending')->get();
        return view('officer.pending-requests' , ['loans' => $loans]);
    }

    public function showApprovedLoans(){
        $loans= DB::table('loans')->where('status', 'active')->get();
        return view('officer.approved', ['loans' => $loans]);

    }

    public function showOverdueLoans(){
        $loans= DB::table('loans')->where('status', 'overdue')->get();
        return view('officer.overdue', ['loans' => $loans]);
    }

    public function showOngoingLoans(){
        $loans= DB::table('loans')->where('status', 'active')->get();
        return view('officer.ongoing', ['loans' => $loans]);
    }

    public function showLoanDetails($loan_id){
        $loan = Loan::find($loan_id);
        $customer = Customer::find($loan->customer_id);
        $contact = Contact::find($customer->contact_id);
        $guarantor = Guarantor::find($customer->guarantor_id) ;

        return view('officer.asses', [
                         'loan' => $loan ,
                         'customer' => $customer ,
                         'guarantor' => $guarantor,
                         'contact' => $contact
                        ]
                  );
    }

    public function verifyLoan($loan_id){

        $loan = Loan::find($loan_id);
        $loan->status = "active" ;
        $loan->save();

        return redirect()->intended(route('officer.approved'));

    }

    public function denyLoan($loan_id){

        $loan = Loan::find($loan_id);
        $loan->status = "denied" ;
        $loan->save();

        return redirect()->intended(route('officer.approved'));

    }

    public function invalidateLoan($loan_id){

        $loan = Loan::find($loan_id);
        $loan->status = "invalid info";
        $loan->save();

        return redirect()->intended(route('officer.approved'));

    }







}
