<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    const STATUS_PENDING = 0;
    const STATUS_APPROVED = 1;

    protected $fillable = [
        'user_id',
        'method',
        'amount',
        'proof',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'status' => 'integer',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
