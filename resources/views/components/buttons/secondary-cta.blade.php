<span class="inline-flex rounded shadow-sm">
    @if ($attributes->has('href'))
        <a {{ $attributes->merge(['class' => 'bg-white border border-gray-300 rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-gray-900']) }}>
            {{ $slot }}
        </a>
    @else
        <button {{ $attributes->merge(['class' => 'bg-white border border-gray-300 rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-gray-900']) }}>
            {{ $slot }}
        </button>
    @endif
</span>