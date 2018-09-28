<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'customer_id', 'amount', 'remaining_amount',
        'per_month', 'duration', 'status',
        'deadline', 'created_date' , 'start_date', 'type', 'interest', 'total_interest', 'total_amount',
        'principal_amount', 'processing_fee', 'fine'
    ];
}
