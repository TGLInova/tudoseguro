<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;
use WallaceMaxters\Masker\Masker;

class SiteSettings extends Settings
{
    public string $endereco;

    public string $telefone;

    public string $celular;

    public string $email;

    public ?string $linkedin  = null;

    public ?string $instagram = null;

    public ?string $facebook  = null;

    public function telefoneComMascara()
    {
        return app(Masker::class)->dynamic($this->telefone, ['(00) 00000-0000', '(00) 0000-0000']);
    }

    public function celularComMascara()
    {
        return app(Masker::class)->dynamic($this->celular, ['(00) 00000-0000', '(00) 0000-0000']);
    }

    public function urlWhatsapp()
    {
        return 'https://wa.me/' . $this->whatsapp;
    }

    public static function group(): string
    {
        return 'site';
    }
}
