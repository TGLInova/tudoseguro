@props(['darkNavbar' => true])
<x-layouts.base :$image :$title :$description body-class="text-[#58656D]">
    <x-ui::navbar :$links :variant="$darkNavbar ? 'white' : 'normal'"  />
    <main class="grow">{{ $slot }}</main>
    <x-ui.footer :$links />
</x-layouts.base>
