<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
        "classroomId",
        "rule",
        "expiresat",
    ];
}