<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state';

    protected $fillable = ['user_id', 'response'];
}
