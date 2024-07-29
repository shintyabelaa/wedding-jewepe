<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalogue extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tb_catalogues'; // Specify the table name

    protected $primaryKey = 'catalogue_id'; // Specify the primary key

    public $timestamps = true; // Enable timestamps

    protected $fillable = [
        'image',
        'package_name',
        'description',
        'price',
        'status_publish',
        'user_id',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['created_at', 'updated_at']; // Specify the date columns

    public static $rules = [
        'package_name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|integer',
        'status_publish' => 'required|string|in:Y,N',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id'); // Define the relationship
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'catalogue_id', 'catalogue_id');
    }
}
