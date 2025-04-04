<?php

namespace App\Filament\Widgets;

use App\Models\CartaoBeneficio;
use Filament\Widgets\ChartWidget;

class CartaoBeneficiosContador extends ChartWidget
{
    protected static ?string $heading = 'Cartões de Benefícios por Mês';

    protected static ?string $maxHeight = '25rem';

    /**
     * @return int | string | array<string, int | null>
     */
    public function getColumnSpan(): int | string | array
    {
        return 'full';
    }

    protected function getData(): array
    {
        $start = now()->addMonth(-6);

        $data = collect([]);

        foreach ($start->monthsUntil(now()) as $date) {

            $mes = str($date->isoFormat('MMM/YY'))->title()->toString();

            $data[$mes] = CartaoBeneficio::query()
                ->whereMonth('created_at', $date->format('n'))
                ->whereYear('created_at', $date->format('Y'))
                ->count();
        }

        return [
            'datasets' => [
                [
                    'data' => $data->values(),
                    'label' => 'Cartões de Benefícios'
                ]
            ],
            'labels' => $data->keys()

        ];

    }

    protected function getType(): string
    {
        return 'line';
    }
}
