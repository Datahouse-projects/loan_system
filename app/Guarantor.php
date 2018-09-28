<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    protected $fillable = [
        'full_name', 'relationship', 'average_income', 'phone_number',
        'nationality', 'occupation', 'owns_house',
        'contact_id', 'created_at' , 'contact_id' ,
        'updated_at'
    ];
}
