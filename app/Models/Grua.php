<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grua extends Model
{
    use HasFactory;

    protected $table = 'gruastiempo';

    protected $fillable = ['date', 'vessel', 'totaltime', 'code', 'observations', 'time', 'maniobras'];
}
