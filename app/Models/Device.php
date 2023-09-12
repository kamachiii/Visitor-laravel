<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'devices';
    protected $fillable = [
        'user_id',
        'device',
        'browser',
        'platform',
        'logout_at'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
