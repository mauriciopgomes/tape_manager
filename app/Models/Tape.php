<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tape extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name_inside', 'name_outside', 'tape_type_id', 'tape_status_id', 'obs',
    ];
}
