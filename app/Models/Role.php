<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    // use HasFactory;
    protected $table = 'roles' ;

    protected $primaryKey = 'role_id';
    public $timestamps = false;
    protected $fillable = [
        'role_id',
        'name',
        'permissions',
    ];

    public function users(){
        return $this->hasMany(User::class, 'user_id');
    }

}
