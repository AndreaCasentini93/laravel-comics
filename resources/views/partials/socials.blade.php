<section id="socials">
    <div class="container d-flex justify-content-between">
        <div>
            <a href="/" class="sign_up">Sign-Up Now!</a>
        </div>
        <nav class="d-flex align-items-center">
            <h2>Follow Us</h2>
            <ul class="d-flex">
                @foreach ($socials as $social)
                    <li>
                        <a href="{{ $social['url'] }}">
                            <img src="{{ $social['image'] }}" alt="{{ $social['name'] }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>