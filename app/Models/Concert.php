<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concert extends Model
{
    use HasFactory;
    protected $primaryKey = 'concerts_id';
    public $incrementing = true;
    protected $fillable = [
        'band_id',
        'title',
        'date',
        'time',
        'latitude',
        'longitude',
        'place',
        'desc',
        'poster'
    ];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
