<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $fillable = [
        'user_id',
        'username',
        'email',
        'password_hash',
        'telephone',
        'type',
        'icon',
        'age',
        'location',
    ];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function instruments()
    {
        return $this->hasMany(UserInstrument::class);
    }

    public function bandMembers()
    {
        return $this->hasMany(BandMember::class);
    }
}