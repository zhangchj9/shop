<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'image', 'on_sale', 'rating', 'sold_count', 'review_count', 'price', 'nimage', 'introimage'];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
        'nimage' => 'json',
        'introimage' => 'json',
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
        $arr = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
        $i = 0;
        $str = $this->attributes['nimage'];
        $str = trim($str, "[]");
        $str = explode(',', $str);
        foreach($str as $value) {
            $value = trim($value, "\"");
            $value = explode('\\', $value);
            $value = implode('', $value);
            // 如果 image 字段本身就已经是完整的 url 就直接返回
            if (Str::startsWith($value, ['http://', 'https://'])) {                    
                return $value;
            }        
            $value = \Storage::disk('local')->url($value); 
            $arr[$i] = $value;
            $i++;
        }
            return $arr;        
    }

    public function getImageUrlBiAttribute()
    {
        $arr = array();
        $i = 0;
        $str = $this->attributes['introimage'];
        $str = trim($str, "[]");
        $str = explode(',', $str);
        foreach($str as $value) {
            $value = trim($value, "\"");
            $value = explode('\\', $value);
            $value = implode('', $value);
            // 如果 image 字段本身就已经是完整的 url 就直接返回
            if (Str::startsWith($value, ['http://', 'https://'])) {                    
                return $value;
            }        
            $value = \Storage::disk('local')->url($value); 
            $arr[$i] = $value;
            $i++;
        }
            return $arr;        
    }
}
