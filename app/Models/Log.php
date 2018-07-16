<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Log;

class Log extends Model
{
    public function scopeNotDoneTasks($query)
    {
        return $query->where('status','=','0');
    }

    public function scopeDoneTasks($query)
    {
        return $query->where('status','=','1');
    }
}
