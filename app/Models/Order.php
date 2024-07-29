<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'tb_order';
    protected $primaryKey = 'order_id';
    public $timestamps = true;

    protected $fillable = [
        'catalogue_id',
        'package_name',
        'name',
        'email',
        'phone_number',
        'wedding_date',
        'status',
        'user_id',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['created_at', 'updated_at', 'wedding_date'];

    public function catalogue()
    {
        return $this->belongsTo(Catalogue::class, 'catalogue_id', 'catalogue_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
