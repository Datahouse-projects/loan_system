<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'full_name', 'email', 'password',
        'marital_status', 'nationality', 'contact_id',
        'is_verified', 'has_loan' , 'loan_id' ,
        'employer' , 'employment_type',
        'guarantor_id' , 'acc_number',
        'average_income'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
