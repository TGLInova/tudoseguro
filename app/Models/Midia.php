<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Midia extends Model
{
    use HasFactory;
    protected $fillable = ['caminho', 'nome'];

    public function model()
    {
        return $this->morphTo();
    }

    public function url(): Attribute
    {
        return Attribute::make(get: fn () => Storage::disk('public')->url($this->caminho))->shouldCache();
    }
}
