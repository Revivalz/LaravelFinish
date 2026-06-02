<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diaries extends Model
{
    protected $fillable = ['title', 'body', 'date'];
}
