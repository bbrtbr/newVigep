<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthUnits extends Model
{
    use HasFactory;

    protected $table = 'health_units';
    protected $primaryKey = 'health_unit_id';

    protected $fillable = [
        'health_unit_name',
        'health_unit_code',
        'health_unit_email'
    ];
}
