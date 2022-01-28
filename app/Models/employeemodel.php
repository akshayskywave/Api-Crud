<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeemodel extends Model
{
    protected $table = 'employee';
    protected $guarded = ['id'];
}
