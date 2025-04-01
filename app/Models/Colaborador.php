<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Colaborador extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sobrenome', 'cargo', 'instagram', 'whatsapp', 'linkedin', 'usuario_id'];

    protected $table = 'colaboradores';

    public function imagem()
    {
        return $this->morphOne(Midia::class, 'model');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }


    public function urlWhatsapp(): Attribute
    {
        return Attribute::make(get: fn () => $this->whatsapp ? sprintf('https://wa.me/55%s', preg_replace('/\D+/', '', $this->whatsapp)) : null);
    }
}
