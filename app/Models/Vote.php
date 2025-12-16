<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'poll_id',
        'option_id',
        'voted_at'
    ];

    protected $casts = [
        'voted_at' => 'datetime'
    ];

    // Relationship ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship ke Poll
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    // Relationship ke Option
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
