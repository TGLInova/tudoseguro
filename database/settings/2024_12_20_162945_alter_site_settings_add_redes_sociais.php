<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.facebook');
        $this->migrator->add('site.instagram');
        $this->migrator->add('site.linkedin');
    }
};
