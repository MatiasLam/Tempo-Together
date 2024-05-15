<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandMember extends Model
{
    use HasFactory;
    protected $primaryKey = 'member_id';
    public $incrementing = true;
    protected $fillable = [
        'band_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
