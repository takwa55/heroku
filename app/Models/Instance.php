<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    use HasFactory;
    protected $table = 'instances';
    protected $fillable=['N_Pension','Nom','Demande','Periode','Emp','wilaya','user'];
    
}
