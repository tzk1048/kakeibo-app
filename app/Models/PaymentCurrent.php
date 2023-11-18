<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bank;
use App\Models\Payment;


class PaymentCurrent extends Model
{
    use HasFactory;
    /**
         * 複数代入不可能な属性
         *
         * @var array
     */
    protected $guarded = [];

}
