<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jasa extends Model
{
    use HasFactory;
    
    protected $table = "jasa";

    protected $guarded = [
        'update_at',
        'create_at',
    ];
   
}
