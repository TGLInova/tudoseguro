@props(['image' => null, 'containerClass' => '', 'variant' => 'normal'])
@php
$_classes = [
    'bg-cover relative group/hero',
    'text-white'                => $image,
    'bg-(image:--bg-image)'     => is_string($image),
    'metalic'                   => in_array('metalic', (array) $variant)
];
@endphp
<x-bless-ui::wrapper
    tag="section"
    :tag-self-close="false"
    component="hero"
    :variant="$variant"
    x-data="{ enable: false }"
    x-intersect.full:enter="enable = true"
    x-intersect.full:leave="enable = false"
    {{ $attributes
        ->class($_classes)
        ->style([
            sprintf('--bg-image: url(\'%s\')', $image) => is_string($image)
        ]) }}
>
    <div @class(['ui-hero-bg'])></div>
    <div @class(['relative h-full', $containerClass])>
        {{ $slot }}
    </div>
</x-bless-ui::wrapper>
