<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    protected $table = 't_stockhistory';
    protected $fillable = ['productionOrderId', 'itemNo', 'orderCategory', 'amount', 'updateUserId'];
}
