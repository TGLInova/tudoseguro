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

        $this->migrator->add('feature_list.titulo', "**Há 37 anos ajudamos nossos clientes** a proteger\nsuas famílias, empresas, bens e futuro financeiro!");

        $this->migrator->add('feature_list.items', [
            [
                'icone' => 'icon-trofeu',
                'titulo' => date('Y') - 1987 . ' Anos de Mercado',
                'texto' => 'Quase 4 décadas no mercado de seguros.'
            ],
            [
                'icone' => 'icon-guarda-chuva',
                'titulo' => '90 mil clientes',
                'texto' => 'Mais de 90.000 clientes e empresas protegidas.'
            ],
            [
                'icone' => 'icon-check',
                'titulo' => 'Referência Nacional',
                'texto'  => 'Uma das corretoras mais tradicionais do Brasil.',
            ],
            [
                'icone' => 'icon-medalha',
                'titulo' => 'Parceiros',
                'texto' => 'Parcerias estratégicas com grandes empresas.'
            ]
        ]);

    }
};
