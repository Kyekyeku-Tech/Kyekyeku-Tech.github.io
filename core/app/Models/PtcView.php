<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;

class PtcView extends Model
{
    use Searchable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function ptc()
    {
        return $this->belongsTo(Ptc::class);
    }
}
