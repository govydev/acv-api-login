<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    // public function tratarLi(){
    //     return $this->hasMany(Tratar::class, 'id'); // un libro tiene muchos tratar
    // }
    public function tratarLi(){
        return $this->belongsToMany(Tratar::class, 'tratars', 'idlibro', 'idtema'); // relacion muchos a muchos
    }

    public function EditorialLi (){
        return $this->belongsTo(Editorial::class, 'ideditorial'); //muchos libros tienen una editorial
    }
    public function AutorLi (){
        return $this->belongsTo(Autor::class, 'idautor'); //muchos libros tienen un autor
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'titulo',
        'anyoed',
        'lugared',
        'numed',
        'tipocubierta',
        'npaginas',
        'nstanteria',
        'nejemplares',
        'observaciones',
        'idautor',
    ];
}
