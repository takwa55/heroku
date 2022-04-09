<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    use HasFactory;
    protected $table = 'wilayas';
    protected $fillable =['N_Pension','Nom','Demande','Reponse','Periode','Emp','Rapport','user'];
}
