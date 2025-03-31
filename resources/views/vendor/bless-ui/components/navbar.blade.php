@props(['links'])
<div class="w-full lg:h-24" x-data="{mobileOpen: false}" x-cloak>
    <x-ui::container class="h-full flex items-center">
        <x-bless-ui::wrapper {{ $attributes }} tag="header" :tag-self-close="false" component="navbar">
            <a x-on:click="mobileOpen = !mobileOpen" class="text-current h-9 w-9 block absolute right-5 top-5 lg:hidden" >
                <x-icon name="heroicon-o-bars-3" />
            </a>
            <a class="w-32 block" href="{{ route('home') }}" wire:navigate>
                <img src="{{ asset('static/img/logo.webp') }}">
            </a>
            <nav class="ui-navbar-links" x-bind:class="mobileOpen ?  [] : ['max-lg:invisible max-lg:-translate-x-full']">
                @foreach($links as $text => $url)
                    <a wire:navigate href="{{ $url }}" class="duration-200 hover:text-primary-200">{{ $text }}</a>
                @endforeach
            </nav>
        </x-bless-ui::wrapper>
    </x-ui::container>
</div>
