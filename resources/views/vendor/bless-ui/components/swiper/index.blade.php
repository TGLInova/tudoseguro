@props(['options' => '{}', 'navigation' => false, 'pagination' => false, 'swiperWrapperClass' => null])
<x-bless-ui::wrapper x-data="swiper({{ $options }})" {{ $attributes->class('swiper-cloak group') }} tag="div" :tag-self-close="false" component="swiper">
    <div @class(['swiper-wrapper', $swiperWrapperClass])>
        {{ $slot }}
    </div>
    @if($navigation)
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    @endif

    @if($pagination)
        <div class="swiper-pagination"></div>
    @endif
</x-bless-ui::wrapper>
