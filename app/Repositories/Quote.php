<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'request_message'
    ];
}
