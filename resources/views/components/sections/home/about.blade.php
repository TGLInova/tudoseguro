@php
$items = [
    'icon-trofeu'    => 'Experiência de quem já está a 24 anos no mercado.',
    'icon-usuarios'  => 'Contamos com mais de 40 mil clientes protegidos.',
    'icon-seguranca' => 'Atendimento e Cobertura Nacional.',
    'icon-parceiro'  => 'Parceria com grandes entidades e seguradoras.'
];
@endphp
<x-ui::section>
    <x-ui::container class="text-center space-y-8">
        <x-ui::h2 class="lg:max-w-3xl lg:mx-auto">
            Somos a TudoSeguro, corretora referência em <wbr>proteção e planejamento financeiro.
        </x-ui::h2>
        <p class="font-light">Uma empresa com mais de 24 anos, referência nacional em seguros.</p>

        <ul class="grid lg:grid-cols-4 grid-cols-2 gap-8">
            @foreach($items as $icon => $text)
                <li class="flex flex-col items-center gap-4">
                    <x-icon :name="$icon" class="text-primary-500 h-16 w-16 " />
                    <p class="font-light">{!! $text !!}</p>
                </li>
            @endforeach
        </ul>
    </x-ui::container>
</x-ui::section>
