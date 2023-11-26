<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buque extends Model
{
    use HasFactory;

    protected $table = 'tempbuques';

    protected $fillable = ['Fechab', 'Nodoc', 'Barco', 'Hatraque', 'Havisopre', 'Iniman', 'Fultman', 'Titotmanio'];
}
