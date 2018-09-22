<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'part_id', 'phone_number',
        'postal_address', 'next_of_kin',
        'kin_relation', 'kin_phone_number' , 'region' ,
        'city' , 'ward', 'street'
    ];

}
