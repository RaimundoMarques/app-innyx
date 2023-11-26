<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $fillable = [
        'name',
        'description',
        'price',
        'data_valid',
        'image',
        'id_user',
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
