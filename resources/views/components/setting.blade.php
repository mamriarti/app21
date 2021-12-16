@props(['heading'])

    <section class="px-6 max-w-md mx-auto">
    <h1 class="text-lg font-bold mb-4">
        {{ $heading }}
    </h1>
    <x-panel>

      {{  $slot }}
    </x-panel>
</section>
