<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDetail extends Model
{
    use HasFactory;
    protected $table = 'p_details';
    protected $fillable=[
        'demande_id',
        'N_Pension',
        'Nom',
        'wilaya',
    ];
}
