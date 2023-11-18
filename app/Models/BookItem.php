<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookItem extends Model
{
    use HasFactory;
    /**
         * 複数代入不可能な属性
         *
         * @var array
     */
    protected $guarded = [];
}
