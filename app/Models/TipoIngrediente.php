<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIngrediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome'
    ];
    public $timestamps = false;
    
    public function ingredientes()
    {
        return $this->belongsTo(Ingrediente::class);
    }
}
