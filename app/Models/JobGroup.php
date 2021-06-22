<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobGroup extends Model
{
    protected $fillable = [
        'user_id', 'jobgroup_name', 'description'
    ];
}
