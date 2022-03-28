<div class="header__language">
    @foreach($links as $iso => $link)
        @if($link)
            <a href="{{ url($link) }}">{{ $iso }}</a>
        @else
            [<span class="active">{{ $iso }} </span>]
        @endif
    @endforeach
</div>