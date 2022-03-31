<?php

namespace App\Models\Models;

use App\Models\Myparent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attachement extends Model
{
    use HasFactory;
    protected $table = 'attachements';
    protected $guarded =[];
}
