@if ($paginator->hasPages())
    <div class="uppercase flex items-center flex-1 mt-10 py-5 font-sans border-dashed border-t border-b  border-blue-300"
         role="navigation">
        {{-- Previous Page Link --}}
        @unless ($paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
               class="block no-underline text-light hover:text-blue-300">Read Newer Posts</a>
        @endunless

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
               class="block no-underline text-light hover:text-blue-300 ml-auto">Read Older Posts</a>
        @endif
    </div>
@endif
