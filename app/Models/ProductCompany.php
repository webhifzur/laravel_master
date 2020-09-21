<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCompany extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'origin_country',
        'address',
        'contact_person',
        'mobile_number'



    ];
}
