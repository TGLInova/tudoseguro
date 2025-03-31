<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.endereco', 'Av. Dois de Junho, 2505 Centro – Cacoal – RO CEP: 76963-787');
        $this->migrator->add('site.telefone', '6934431175');
        $this->migrator->add('site.celular', '69984554514');
        $this->migrator->add('site.email', 'contato@tudoseguro.online');
    }
};
