@if ($paginator->hasPages())
    <nav class="flex justify-center mt-4">
        <ul class="flex space-x-1 pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled opacity-50 cursor-not-allowed" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="px-3 py-1 rounded bg-gray-200">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="px-3 py-1 rounded hover:bg-gray-300 transition-colors">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled opacity-50" aria-disabled="true"><span class="px-3 py-1">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page">
                                <span class="px-3 py-1 rounded bg-blue-600 text-white font-semibold">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="px-3 py-1 rounded hover:bg-gray-300 transition-colors">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="px-3 py-1 rounded hover:bg-gray-300 transition-colors">&rsaquo;</a>
                </li>
            @else
                <li class="disabled opacity-50 cursor-not-allowed" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="px-3 py-1 rounded bg-gray-200">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
