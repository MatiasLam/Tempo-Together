<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConcertImages extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'concert_id',
        'image_path'
    ];

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
    

}