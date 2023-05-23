<!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
<a {{ $attributes }}
    @class([
        'bg-gray-800' => $active,
        'text-white' => $active,
        'text-gray-50' => !$active,
        'hover:text-white' => !$active,
        'hover:bg-gray-800' => !$active,
        'group',
        'flex',
        'gap-x-3',
        'rounded-md',
        'p-2',
        'text-sm',
        'leading-6',
        'font-semibold',
        ])>
<x-icon name="{{ $icon }}" class="{{ $iconClass ?? 'h-6 w-6 shrink-0' }}" />
<span class="truncate">{{ $slot }}</span>
</a>
