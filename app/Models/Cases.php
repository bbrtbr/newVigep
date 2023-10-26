<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';

   
    protected $primaryKey = 'case_id';

    protected $fillable = [
        'case_type',    
        'case_disease',
        'case_cid',
        'case_notification_date'
    ];
}

