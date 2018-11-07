<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Customer;
use App\Guarantor;
use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contact = Contact::find(Auth::user()->contact_id);
        $loan =null;

        if(Auth::user()->has_loan){
            $loan = Loan::find(Auth::user()->loan_id);
        }

        return view('customer.status', ['contact' => $contact , 'loan' => $loan]);
    }

    public function showFinancialInfo()
    {
        $contact = Contact::find(Auth::user()->contact_id);
        $loan =null;

        return view('customer.finance', ['contact' => $contact ]);

    }

    public function updateFinancialInfo(Request $request){

        //1.0 add financial info
        $customer = Customer::find($request->customer_id);
        $customer->employment_type =  $request->employment;
        $customer->employer =  $request->employer;
        $customer->average_income =  $request->income;

        //2.0 create  guarantor
        $guarantor = Guarantor::create([
            'full_name' => $request->g_name,
            'occupation' => $request->g_occupation,
            'nationality' => $request->g_nationality,
            'average_income' => $request->g_average_income ,
            'phone_number' => $request->g_phone ,
            'residence' => $request->g_residence ,
        ]);

        //3.0 relate guarantor with customer
        $customer->guarantor_id = $guarantor->id;
        $customer->save();

        return redirect()->intended(route('customer'));

    }


    public function showApplicationForm(){
        $contact = Contact::find(Auth::user()->contact_id);
        $loan =null;

        return view('customer.application-form', ['contact' => $contact ]);
    }

    public function submitApplicationForm(Request $request){

        $loan = Loan::create([
            'amount' => $request->amount,
            'customer_id' => $request->customer_id,
            'duration' => $request->duration ,
            'remaining_amount' => $request->amount,

            'status' => "pending" ,
        ]);

        $loan->per_month= ($loan->amount) / ($loan->duration);
        $loan->save();

        $customer = Customer::find($request->customer_id);
        $customer->has_loan = true ;
        $customer->loan_id= $loan->id;
        $customer->save();

        return redirect()->intended(route('customer'));
    }


    public function showRepayForm()
    {
        $contact = Contact::find(Auth::user()->contact_id);
        $loan =null;
        return view('customer.repay', ['contact' => $contact ]);
    }

    public function repayLoan(Request $request)
    {

        $customer = Customer::find($request->customer_id);
        $loan = Loan::find($customer->loan_id);
        $loan->remaining_amount = ($loan->remaining_amount) - ($loan->per_month);

        if($loan->remaining_amount==0) {
            $loan->status = "complete" ;
        }
        $loan->save();
        return redirect()->intended(route('customer'));
    }




}
