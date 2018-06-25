<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'image', 'on_sale', 'rating', 'sold_count', 'review_count', 'price'];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    // 与商品SKU关联
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    public function getImageUrlAttribute()
    {
        $str = $this->attributes['image'];
        $str = explode(';', $str);
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($str[0], ['http://', 'https://'])) {                    
            return $str[0];
        }        
        $str = \Storage::disk('local')->url($str[0]);        
        return $str;
    }

    public function getImageUrlAiAttribute()
    {
        $str = $this->attributes['image'];
        $str = explode(';', $str);
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($str[1], ['http://', 'https://'])) {                    
            return $str[1];
        }        
        $str = \Storage::disk('local')->url($str[1]);        
        return $str;
    }
}
