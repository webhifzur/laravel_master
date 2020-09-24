<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use HasFactory;
    use SoftDeletes;

    function suplier(){
        return $this->hasone('App\Models\Supplier','id','supplier_id');
    }

    function productname(){
        return $this->hasone('App\Models\Product','id','product');
    }
}
