<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model{
    //public $table = 'eleves';
    public $dates = ['birth_date'];
    public $guarded = ['id'];
}
