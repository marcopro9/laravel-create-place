<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $table = 'students';
    protected $fillable = [
      'nome',
      'cognome',
      'descrizione',
      'voto',
      'nome_classe'
    ];
}
