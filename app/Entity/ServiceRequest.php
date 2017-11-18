<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $table = 'service_requests';
    protected $guarded = ['id', 'agent'];
}
