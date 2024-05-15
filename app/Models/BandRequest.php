<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BandRequest extends Model
{
    use HasFactory;
    protected $primaryKey = 'request_id';
    public $incrementing = true;
    protected $fillable = [
        'band_id',
        'new_member_instrument',
        'instrument_level',
        'description'
    ];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
