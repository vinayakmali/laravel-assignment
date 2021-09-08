<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
      protected $table = 'business_service';
    
    protected $fillable = [
        'id',
        'name',
        'category',
        'timeline',
        'amount',
        'type',
        'created_at',
        'updated_at'
    ];
}
