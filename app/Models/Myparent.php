<?php

namespace App\Models;

use App\Models\Models\Attachement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Myparent extends Model
{
    use HasFactory;
    protected $table = 'enquetes';
    protected $fillable =['N_Pension','Nom','Demande','Reponse','Periode','Emp','Rapport','user'];
    //protected $guarded =[];

   /*  
    public function attachement()
    {
        return $this->belongsTo('App\Models\Models\Attachement');
    } */
}
