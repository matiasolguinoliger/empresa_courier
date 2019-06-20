<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=["rut_cliente","nom_cliente","ape_cliente","dire_cliente","email_cliente","fonomovil_cliente","ruta"];
    //
}
