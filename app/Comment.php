<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'id',
        'Store_id',
        'Member_id',
        'content',
        'rate',
    ];

    protected $table="comments";
}
