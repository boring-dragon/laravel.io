<span {{ $attributes->merge(['class' => 'text-lio-500 font-bold relative']) }}>
    {{ $slot }}
    <x-icon-accent class="absolute -bottom-1.5 w-full max-h-1.5" />
</span>