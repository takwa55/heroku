<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    use HasFactory;
    protected $table = 'demandes';
    protected $fillable = ['N_Pension','Nom','Demande','Periode','Emp','wilaya','user'];
}
