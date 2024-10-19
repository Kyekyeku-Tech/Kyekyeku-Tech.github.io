<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;

class CommissionLog extends Model
{
    use Searchable;

    protected $guarded = ['id'];

    public function userTo(){
    	return $this->belongsTo(User::class,'to_id');
    }

    public function userFrom(){
    	return $this->belongsTo(User::class,'from_id');
    }
}
