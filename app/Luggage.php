<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luggage extends Model
{
    // 絶対に変更しないカラム
    protected $guarded = ['id'];
}
