<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;

    protected $table = 'services';
        
    protected $primarykey = 'service_id';
    protected $fillable  = ['service_name','service_price'];
}