<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noti extends Model
{
    protected $fillable=[
        'id',
        'Store_id',
        'title',
        'content',
    ];

    protected $table="pushs";

}
