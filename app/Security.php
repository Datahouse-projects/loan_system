<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    protected $fillable = [
        'id', 'loan_id', 'type', 'verification', 'issued_date', 'expire_date', 'market_value', 'cover_value',
        'description', 'security_number',

];

}
