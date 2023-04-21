<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Code extends Model
{
    protected $fillable = ['code_id', 'serial', 'phone', 'coc', 'thep_chu', 'mac_be_tong'];

    use HasFactory;
}
