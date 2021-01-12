<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'user_id','titulo', 'descripcion', 'abstracto','isbn','fecha_publicacion','autor','editorial'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
