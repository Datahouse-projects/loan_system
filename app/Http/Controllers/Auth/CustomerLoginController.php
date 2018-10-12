<?php

namespace App\Http\Controllers\Auth;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer;
use Illuminate\Support\Facades\Validator;


class CustomerLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }


    public function showLoginForm()
    {
        return view('customer.login');

    }

    public function login(Request $request){

        $credentials = ['email'=>$request->email, 'password'=>$request->password];
        $remember = $request->remember ;

        //1.0 validate the form data
        $this->validate( $request, [
            'email' => 'required|email' , 'password' => 'required|min:6'
        ]);

        //2.0 Attempt to login
        if(Auth::guard('customer')->attempt($credentials ,$remember)) {
            return redirect()->intended(route('customer'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function showRegistrationForm()
    {
        return view('customer.register');
    }

    public function register(Request $request){



            //1.0 validating data
            $credentials = ['email'=>$request->email, 'password'=>$request->password];

            $validator= Validator::make($credentials, [
                    'email' => 'required|max:255|unique:customers',
                    'password' => 'required|min:6',
                ]);


            if ($validator->fails()) {
               return redirect(route('customer.register'))->withInput()->with(['errors' => $validator->errors() ]);


            } else {

                //2.0 Creating a client
                $customer = Customer::create([
                    'full_name' => $request->full_name,
                    'email' => $request->email,
                    'password' => bcrypt( $request->password),
                ]);

                $customer->is_verified= false ;
                $customer->has_loan= false ;


                $customer->date_of_birth= $request['dob'];
                $customer->marital_status= $request['marital'];
                $customer->nationality = $request['nationality'];

                //3.0 creating a Contact for the client
                $contact = Contact::create([ 'phone_number' =>  $request['phone'],]);

                $contact->region = $request['region'];
                $contact->city = $request['city'];
                $contact->ward = $request['ward'];
                $contact->street = $request['street'];

                $contact->next_of_kin = $request['kin'];
                $contact->kin_relation = $request['k_relationship'];
                $contact->kin_phone_number = $request['k_phone'];


                //relating Customer and contact
                $customer->contact_id = $contact->id ;
                $contact->customer_id= $customer->id;

                //4.0 saving...
                $customer->save();
                $contact->save();


                //5.0 logging the user in
                if(Auth::guard('customer')->attempt($credentials)) {
                    return redirect()->intended(route('customer'));
                }

                return redirect()->back()->withInput($request->only('email','remember'));

            }

        }

}
