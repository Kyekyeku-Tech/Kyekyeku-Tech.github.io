<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuningPlan extends Model
{
    use HasFactory;

    public function plan()
    {
        return $this->hasOne(Plan::class, 'id', 'plan_id')->withDefault();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withDefault();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    
}
