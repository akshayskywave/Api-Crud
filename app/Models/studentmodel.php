<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentmodel extends Model
{
    protected $table = 'student';
    protected $guarded = ['id'];
}
