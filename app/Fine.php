<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    protected $fillable = [
        'last_run_date','next_run_date','fine_amount'


      ];
}
