<section id="dc_cards" class="text-center">
    <div class="container d-flex flex-wrap text-start">
        @foreach ($cards as $card)
            <a href="{{ $card['thumb'] }}" class="dc_card text-start">
                <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                <h2>{{ $card['series'] }}</h2>
            </a>
        @endforeach
    </div>
    <a href="/" class="cards_button">Load More</a>
</section>