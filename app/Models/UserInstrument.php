<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class UserInstrument extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'user_id',
        'instrument_id',
        'instrument_level'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function instrument()
    {
        return $this->belongsToMany(Instruments::class);
    }
}
