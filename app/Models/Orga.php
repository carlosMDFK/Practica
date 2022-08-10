<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orga extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'rut',
        'nombre',
        'regis',
        'fojas',
        'tipo',
        'detalle',
        'direc',
        'fonosede',
        'uvecinal',
        'sector',
        'zona',
        'nsocios',
        'ffunda',
        'ndecpj',
        'fincrip',
        'fdecpj',
        'desde',
        'hasta',
        'rutpresi',
        'npresi',
        'direcpresi',
        'fonopresi',
        'rutsecre',
        'nsecre',
        'direcsecre',
        'fonosecre',
        'rutteso',
        'nteso',
        'directeso',
        'fonoteso',
        'rutdirec1',
        'ndirec1',
        'direcdirec1',
        'fonodirec1',
        'rutdirec2',
        'ndirec2',
        'direcdirec2',
        'fonodirec2',
        'obs',
        'fecharcei',
        'fecharecepm',
        'nregrcei',
        'fechareg1',
        'fechareg2',
    ];
}
