<section id="footer_menu">
    <div class="container">
        <div class="d-flex">
            <div class="col_left">
                <h2>DC Comics</h2>
                <ul>
                    @foreach ($dc_comics_links as $link)
                        <li>
                            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <h2>Shop</h2>
                <ul>
                    @foreach ($shop_links as $link)
                        <li>
                            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col_center">
                <h2>DC</h2>
                <ul>
                    @foreach ($dc_links as $link)
                        <li>
                            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col_right">
                <h2>Sities</h2>
                <ul>
                    @foreach ($cities_links as $link)
                        <li>
                            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="/">noter here</a>. All right reserved.<br><a href="/">Cookies Settings</a></p>
        <img class="logo" src="{{ asset('img/dc-logo-bg.png') }}" alt="Logo DC">
    </div>
</section>