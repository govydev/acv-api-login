<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratar extends Model
{
    use HasFactory;
    public function temaTr (){
        return $this->belongsTo(Tema::class, 'idtema'); //muchos tratar tienen un tema
    }
    public function LibroTr (){
        return $this->belongsTo(Libro::class, 'idlibro'); //muchos tratar tienen un libro
    }
}
