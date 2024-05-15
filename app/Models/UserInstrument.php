<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class UserInstrument extends Model
{
    use HasFactory;
    protected $primaryKey = 'instrument_id';
    public $incrementing = true;
    protected $fillable = [
        'user_id',
        'instrument',
        'instrument_level'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
