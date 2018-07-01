<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personalization extends Model
{
    //

    protected $fillable = [
        'brand',
        'screensize',
        'photo',
        'memorysize',
        'ram',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
