@props(['darkNavbar' => true])
<!-- bg-gray-100 -->
<x-layouts.base :image="$image ?? asset('static/img/banner-sobre.webp')" :$title :$description body-class="bg-gray-100 text-gray-600">
    <x-ui::navbar :$links :variant="$darkNavbar ? 'white' : 'normal'"  />
    <main class="grow flex flex-col w-full">{{ $slot }}</main>
    <x-ui.footer :$links />
</x-layouts.base>
