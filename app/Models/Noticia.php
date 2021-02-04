<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    //LARAVEL BUSCA UNA TABLA  QUE SE LLAME IGUAL, EN MINUSCULAS
    //CON UNA "S" AL FINAL

    //O PODEMOS DECIR QUE TABLA QUEREMOS
    protected $table = "noticias";
}
