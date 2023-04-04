@if ($paginator->haspages())
    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap flex-row justify-center items-center mt-3">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
            <li>
                <a class="pagination__link opacity-50" disabled > << </a>
            </li>
            <li>
                <a class="pagination__link opacity-50" disabled > < </a>
            </li>
        @else
            <li>
                <a class="pagination__link" href="{{ $paginator->url(1) }}"> << </a>
            </li>
            <li>
                <a class="pagination__link" href="{{ $paginator->previousPageUrl() }}"> < </a>
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled:opacity-50" disabled> <a class="pagination__link" href="">...</a> </li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li> <a class="pagination__link pagination__link--active" href="">{{ $page }}</a> </li>
                    @else
                        <li> <a class="pagination__link" href="{{ $url }}">{{ $page }}</a> </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li>
                <a class="pagination__link" href="{{ $paginator->nextPageUrl() }}"> > </a>
            </li>
            <li>
                <a class="pagination__link" href="{{ $paginator->url($paginator->lastPage()) }}"> >> </a>
            </li>
        @else 
        <li>
            <a class="pagination__link opacity-50" disabled  > > </a>
        </li>
        <li>
            <a class="pagination__link opacity-50" disabled  > >> </a>
        </li>
        @endif
        </ul>
        <div class="block md:block  text-gray-600 float-right" id="pageLinker">Menampilkan {{ $paginator->firstItem() }} sampai {{ $paginator->lastItem() }} dari {{ $paginator->total() }} data</div>
    </div>
@endif