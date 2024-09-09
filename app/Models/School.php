<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_name',
        'enrollment_prefix',
        'phone',
        'email',
        'address',
        'enrollment_base_number',
        'enrollment_base_padding',
        'admission_prefix',
        'admission_base_number',
        'admission_base_padding',
        'status',
    ];
}
