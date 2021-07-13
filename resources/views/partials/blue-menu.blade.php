<section id="blue_menu">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1  d-flex justify-content-center align-items-center">
                @foreach ($blue_menu_links as $link)
                    <a href="{{ $link['url'] }}" class="blue_menu_link d-flex align-items-center">
                        <img src="{{ $link['image'] }}" alt="{{ $link['text'] }}">
                        <h2>{{ $link['text'] }}</h2>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>