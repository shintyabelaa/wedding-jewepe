<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'tb_settings';
    protected $primaryKey = 'setting_id';
    public $timestamps = true;

    protected $fillable = [
        'website_name',
        'phone_number1',
        'phone_number2',
        'email1',
        'email2',
        'address',
        'maps',
        'logo',
        'facebook_url',
        'instagram_url',
        'youtube_url',
        'header_business_hour',
        'time_business_hour',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
