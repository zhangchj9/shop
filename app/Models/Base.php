<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BaseModel;

class Base extends BaseModel
{
    // 软删除
    use SoftDeletes;
}
