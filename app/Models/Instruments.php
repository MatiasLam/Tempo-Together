<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instruments extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'instrument_id',
        'instrument',
        'icon'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function userInstrument()
    {
        return $this->belongsToMany(UserInstrument::class);
    }
    

}