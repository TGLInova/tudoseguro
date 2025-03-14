@props(['darkNavbar' => true])
<!-- bg-slate-100 -->
<x-layouts.base :$image :$title :$description body-class="bg-slate-100 text-neutral-700">
    <x-ui::navbar :$links :variant="$darkNavbar ? 'white' : 'normal'"  />
    <main class="grow">{{ $slot }}</main>
    <x-ui.footer :$links />
</x-layouts.base>
