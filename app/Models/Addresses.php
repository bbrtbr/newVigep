<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $table = 'addresses';
    protected $primaryKey = 'address_id';
    

    protected $fillable = [
        'address_uf',
        'address_municipality',
        'address_ibge_code',
        'address_district',
        'address_neighborhood',
        'address_address',
        'address_code',
        'address_number',
        'address_complement',
        'address_geofield1',
        'address_geofield2',
        'address_reference',
        'address_cep',
        'address_zone',
        'address_country',
    ];
}
