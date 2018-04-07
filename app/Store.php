<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table="stores";

    protected $fillable = [
        'name', 'contact', 'email', 'password','phone', 'address', 'picture',
    ];
}
