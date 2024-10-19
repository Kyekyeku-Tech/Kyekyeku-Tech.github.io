<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Ptc extends Model
{

    protected $casts = [
        'schedule' => 'array'
    ];

    public function views()
    {
        return $this->hasMany(PtcView::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeInactive($query)
    {
        $query->where('status', Status::PTC_INACTIVE);
    }

    public function scopeActive($query)
    {
        $query->where('status', Status::PTC_ACTIVE);
    }

    public function scopePending($query)
    {
        $query->where('status', Status::PTC_PENDING);
    }

    public function scopeRejected($query)
    {
        $query->where('status', Status::PTC_REJECT);
    }

    public function statusBadge(): Attribute
    {
        return new Attribute(
            get: fn () => $this->badgeData(),
        );
    }

    public function badgeData()
    {
        $html = '';
        if ($this->status == Status::PTC_INACTIVE) {
            $html = '<span class="badge badge--dark">' . trans('Inactive') . '</span>';
        } elseif ($this->status == Status::PTC_ACTIVE) {
            $html = '<span class="badge badge--success">' . trans('Active') . '</span>';
        } elseif ($this->status == Status::PTC_PENDING) {
            $html = '<span class="badge badge--warning">' . trans('Pending') . '</span>';
        } elseif ($this->status == Status::PTC_REJECT) {
            $html = '<span class="badge badge--danger">' . trans('Rejected') . '</span>';
        }
        return $html;
    }

    public function typeBadge(): Attribute
    {
        return new Attribute(
            get: fn () => $this->typeData(),
        );
    }

    public function typeData()
    {
        $html = '';
        if ($this->ads_type == 1) {
            $html = '<span class="badge badge--success"><i class="fa fa-link"></i>' . trans('URL') . '</span>';
        } elseif ($this->ads_type == 2) {
            $html = '<span class="badge badge--dark"><i class="fa fa-image"></i>' . trans('Image') . '</span>';
        } elseif ($this->ads_type == 3) {
            $html = '<span class="badge badge--primary"><i class="fa fa-code"></i>' . trans('Script') . '</span>';
        } else {
            $html = '<span class="badge badge--primary"><i class="fa fa-code"></i>' . trans('Youtube Link') . '</span>';
        }
        return $html;
    }
}
