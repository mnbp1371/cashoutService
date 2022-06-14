@if(isset($meta['last_page']) && isset($meta['current_page']) && $meta['last_page'] > 1)
    @php($min = $meta['current_page'] - 5)
    @php($min = $min < 1 ? 1 : $min)
    @php($max = $meta['current_page'] + 5)
    @php($max = $max > $meta['last_page'] ? $meta['last_page'] : $max)

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center pagination-sm">
            <li class="page-item">
                <a href="{{ request()->fullUrlWithQuery(['page' => ['number' => 1]])}}"
                   class="page-link">{{ __('first')}}</a>
            </li>
            @for($i = $min; $i <= $max; $i++)
                @if($min > 1 && $i == $min)
                    <li class="page-link">...</li>
                @endif

                <li class="page-item @if($i == $meta['current_page']) active @endif">
                    <a href="{{ request()->fullUrlWithQuery(['page' => ['number' => $i]])}}" class="page-link">
                        {{$i}}
                    </a>
                </li>

                @if($meta['last_page'] > $max && $i == $max)
                    <li class="page-link">...</li>
                @endif
            @endfor
            <li class="page-item">
                <a href="{{ request()->fullUrlWithQuery(['page' => ['number' => $meta['last_page']]]) }}"
                   class="page-link">{{ __('last')}}
                </a>
            </li>
        </ul>
    </nav>
@endif
