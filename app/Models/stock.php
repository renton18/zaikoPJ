<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $table = 't_stock';
    protected $fillable = ['productionOrderId', 'itemNo', 'currentAmount', 'updateUserId'];
}
