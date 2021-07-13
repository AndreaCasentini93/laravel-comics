<section id="dc_cards">
    <div class="container d-flex flex-wrap">
        @foreach ($cards as $card)
            <div class="dc_card">
                <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                <h2>{{ $card['series'] }}</h2>
            </div>
        @endforeach
    </div>
</section>