<div class="relative text-left" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <i class="{{ $icon }} w-6 h-6 text-emerald-50 hover:text-emerald-200"></i>
    <button @click="open = !open" class="inline-flex items-center px-0 py-3 text-lg font-medium text-emerald-50 hover:text-emerald-200 focus:outline-none">
        {{ $title }}
        <i class="fa-solid fa-caret-down ms-2 w-5 h-4 ml-auto"></i>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 w-48 mt-2 py-2 bg-white rounded-md shadow-lg">
        @foreach ($items as $item)
            <a href="{{ $item['link'] }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $item['label'] }}</a>
        @endforeach
    </div>
</div>
