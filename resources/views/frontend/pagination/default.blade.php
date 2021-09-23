<div class="row text-center pt-5 border-top">
           <div class="col-md-12">
             <div class="custom-pagination">
               <span>1</span>
               <a href="#">2</a>
               <a href="#">3</a>
               <a href="#">4</a>
               <span>...</span>
               <a href="#">15</a>
             </div>
           </div>
         </div>



@if ($paginator->hasPages())
<ul class="pager">

    @if ($paginator->onFirstPage())
        <li class="disabled"><span>← Previous</span></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif



    @foreach ($elements as $element)

        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif



        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active my-active"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach



    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
    @else
        <li class="disabled"><span>Next →</span></li>
    @endif
</ul>
@endif
