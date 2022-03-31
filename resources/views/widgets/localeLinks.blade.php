<div class="header__language">
    @foreach($links as $iso => $link)
        @if($link)

        @else
            <div class="header__language-current">
                <span class="active">{{ $iso }} </span>
                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.21895L1.26512 0L6 4.5621L10.7349 0L12 1.21895L6 7L0 1.21895Z" fill="#0D0E17"/>
                </svg>
            </div>
        @endif
    @endforeach
    <div class="header__language-else" style="display: none">
        @foreach($links as $iso => $link)
            @if($link)
                <a href="{{ url($link) }}">{{ $iso }}</a>
            @endif
        @endforeach
    </div>
</div>