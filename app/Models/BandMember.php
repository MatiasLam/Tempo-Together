<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandMember extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'band_id',
        'name',
        'instrument',
        'age',
        'instrument_level'
    ];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
