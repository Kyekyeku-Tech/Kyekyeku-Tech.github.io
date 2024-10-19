<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;

class PtcReport extends Model
{
    use Searchable;
    public function type()
    {
        return $this->belongsTo(PtcReportType::class, 'ptc_report_type_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ptc()
    {
        return $this->belongsTo(Ptc::class);
    }
}
