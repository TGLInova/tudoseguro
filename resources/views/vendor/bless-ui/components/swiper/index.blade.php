@props(['options' => '{}', 'navigation' => false, 'pagination' => false, 'swiperWrapperClass' => null])
<div class="swiper-container relative">
    <x-bless-ui::wrapper x-data="swiper({{ $options }})" {{ $attributes->class('swiper-cloak group') }} tag="div" :tag-self-close="false" component="swiper">
        <div @class(['swiper-wrapper', $swiperWrapperClass])>
            {{ $slot }}
        </div>
    </x-bless-ui::wrapper>
    @if($navigation)
        {{-- <div class="swiper-button-next"></div> --}}
        <div class="swiper-button-next text-primary hover:text-primary-400 absolute -right-4 top-1/2 -translate-y-1/2 translate-x-full z-10 cursor-pointer">
            <x-icon name="heroicon-o-arrow-right-circle" class="h-12 w-12" />
        </div>
        {{-- <div class="swiper-button-prev"></div> --}}
    @endif

    @if($pagination)
        <div class="swiper-pagination"></div>
    @endif
</div>
