<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id', 'loan_id', 'date', 'amount', 'balance', 'payment_type', 'verification', 'payment_type_id', 'received_by',

];

}
