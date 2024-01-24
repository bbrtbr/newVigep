<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthWorkers extends Model
{
    use HasFactory;
    protected $table = 'health_workers';
    protected $primaryKey = 'health_worker_id';

    protected $fillable = [
        'health_worker_name',
        'health_unit_code',
        'health_worker_function',
        'health_worker_registration',
    ];
}
