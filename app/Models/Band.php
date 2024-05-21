<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Band extends Model
{
    use HasFactory;
    protected $primaryKey = 'band_id';
    public $incrementing = true;
    protected $fillable = [
        'name',
        'description',
        'location'    
    ];

    public function concerts()
    {
        return $this->hasMany(Concert::class);
    }

    public function bandMembers()
    {
        return $this->hasMany(BandMember::class);
    }

    public function bandRequests()
    {
        return $this->hasMany(BandRequest::class);
    }
}
