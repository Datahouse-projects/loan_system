<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan_payment_schedule extends Model
{
    protected $fillable = [
        'id', 'loan_id', 'payment_date', 'principal_interest', 'total_amount'
    ];

}
