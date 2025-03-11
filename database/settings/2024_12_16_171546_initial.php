<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.endereco', 'Av. Nossa Senhora do Carmo 1890, 10º andar, Sion | Belo Horizonte | MG | CEP 30.320-000');
        $this->migrator->add('site.telefone', '3132801000');
        $this->migrator->add('site.whatsapp', '3188991010');
        $this->migrator->add('site.email', 'multseg@multisegseguros.com.br');

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
