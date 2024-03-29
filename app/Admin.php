<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'user_id',
        'user_name',
        'first_name',
        'response',
        'state'
    ];
}
