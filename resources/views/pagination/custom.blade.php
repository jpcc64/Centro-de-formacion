@if ($paginator->hasPages())
    <nav class="flex items-center justify-between basis-full">
        <ul class="flex space-x-4">
            {{-- Botón "Anterior" --}}
            @if ($paginator->onFirstPage())
                <li class="text-gray-500" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="hover:text-gray-700" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Elementos de la página --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array of links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page"><span class="font-bold">{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" class="hover:text-gray-700">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Botón "Siguiente" --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="hover:text-gray-700" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="text-gray-500" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
