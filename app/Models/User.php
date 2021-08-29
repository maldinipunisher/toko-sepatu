<?php

namespace App\Models;

use App\Models\Role as ModelsRole;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Role;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey= 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'role',
        'address',
        'phone',
        'password',
        'profilepic',
        'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsTo(ModelsRole::class, 'role', 'role_id');
    }

    public function password_reset(){
        return $this->hasOne(PasswordReset::class, 'user_id');
    }

    public function orders(){
        return $this->hasMany(Order::class, "user_id");
    }

    public function products(){
        return $this->belongsToMany(Product::class, null, 'user','product');
    }
}
