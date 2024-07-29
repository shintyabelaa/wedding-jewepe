<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_users';
    protected $primaryKey = 'user_id';
    public $timestamps = false; // Assuming 'created_at' and 'updated_at' are not used as Laravel expects

    protected $fillable = [
        'name',
        'username',
        'password',
        'created_at',
        'updated_at',
    ];

    public function catalogues()
    {
        return $this->hasMany(Catalogue::class, 'user_id', 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'user_id');
    }
}
