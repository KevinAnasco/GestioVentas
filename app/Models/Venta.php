<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable=[

        'cliente_id','vendedor_id','descuento','total'

    ];


    public function cliente(){

        return $this->belongsTo(Cliente::class,'cliente_id');

    }


    public function user(){

        return $this->belongsTo(User::class,'vendedor_id');

    }

    public function detalles(){

        return $this->hasMany(Detalle_venta::class);

    }
}
