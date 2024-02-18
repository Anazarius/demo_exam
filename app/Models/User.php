<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'last_name', 'login', 'password'];

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function shift() {
        return $this->hasMany(Shift::class);
    }
}
