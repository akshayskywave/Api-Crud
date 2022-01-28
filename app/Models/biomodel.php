<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biomodel extends Model
{
    protected $table = 'bio_data';
    protected $guarded = ['id'];
}
