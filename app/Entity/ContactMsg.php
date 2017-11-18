<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ContactMsg extends Model
{
    protected $table = 'contact_msgs';
    protected $guarded = ['id', 'agent', 'attendedTo'];
}
