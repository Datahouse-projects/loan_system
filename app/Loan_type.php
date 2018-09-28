<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan_type extends Model
{
    protected $fillable = [
        'id', 'description', 'interest',
            'duration', 'min_age', 'max_age',
            'min_no_people',
            'max_no_people',
            'processing_fee',
            'security_cover',

    ];

}
