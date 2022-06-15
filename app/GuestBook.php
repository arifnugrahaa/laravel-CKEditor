<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    protected $guarded = [];
    protected $table = 'guestbooks';
}
