<div id="header_menu">
    <nav class=" container d-flex justify-content-between align-items-center">
        <a href="/">
            <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
        </a>
        <ul class="d-flex align-items-center">
            @foreach ($header_menu as $link)
            @if ($link['scroll'])
                <li>
                    <a href="{{ $link['url'] }}">{{ $link['text'] }} <i class="fas fa-caret-down"></i></a>
                </li>
            @else
                <li class="{{ $link['active']? 'active':'' }}">
                    <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                </li>
            @endif
            @endforeach
        </ul>
        <form class="d-flex align-items-center">
            <input type="text" name="search" id="search" placeholder="Search">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </nav>
</div>