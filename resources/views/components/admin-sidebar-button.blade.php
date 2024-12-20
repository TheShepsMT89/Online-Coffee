<li class="relative px-6 py-3">
    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="{{ $url }}">
        @if ($url == Request::url())
            <span class="absolute inset-y-0 left-0 w-1 bg-grape-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
        @endif
        <div class="">
            {!! $icon !!}
            <span>{{ $text }}</span>
        </div>
    </a>
</li>
