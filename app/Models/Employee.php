<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla employees
class Employee extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
}
