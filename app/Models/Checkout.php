<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'camp_id', 'card_number', 'expired_date', 'cvc', 'is_paid'];

    public function setExpiredAttribute($value): void
    {
        $this->attributes['expired_date'] = date('Y-m-t', strtotime($value));

    }

    public function Camp(): BelongsTo
    {
        return $this->belongsTo(Camp::class);
    }
}
