<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'm_item';
    protected $fillable = ['itemNo', 'diagramNo', 'diagramName', 'updateUserId'];
}
