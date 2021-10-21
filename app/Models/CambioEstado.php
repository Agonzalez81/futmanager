<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CambioEstado extends Model
{
    use HasFactory;
    protected $table = 'cambio_estados';

    //relacion uno a muchos
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
