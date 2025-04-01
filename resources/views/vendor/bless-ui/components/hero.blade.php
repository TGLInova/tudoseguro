@props(['image' => null, 'mobileImage' => null, 'imageClass' => 'bg-center bg-cover ', 'containerClass' => '', 'variant' => 'normal'])
@php

$_classes = [
    'bg-cover bg-no-repeat bg-center relative group/hero',
    'text-white ' => $image,
    'metalic' => in_array('metalic', (array) $variant),
    'primary' => in_array('primary', (array) $variant)
];

@endphp
<x-bless-ui::wrapper tag="section" :tag-self-close="false" component="hero" :variant="$variant" x-data="{ enable: false }"
    x-intersect.full:enter="enable = true" x-intersect.full:leave="enable = false"
    {{ $attributes->class($_classes)->style([
        sprintf('--bg-image: url(\'%s\')', $image) => is_string($image),
        sprintf('--mobile-bg-image: url(\'%s\')', $mobileImage) => is_string($mobileImage)
    ]) }}>
    <div @class(['ui-hero-bg'])>
        <div @class([
            "bg-no-repeat absolute inset-0 lg:bg-(image:--bg-image) mix-blend-multiply",
            $mobileImage ? 'bg-(image:--mobile-bg-image)' : 'bg-(image:--bg-image)',
            'grayscale-100' => $_classes['primary'],
            $imageClass
        ])></div>
    </div>
    <div @class(['relative h-full', $containerClass])>
        {{ $slot }}
    </div>
</x-bless-ui::wrapper>
