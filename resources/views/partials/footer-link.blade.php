@foreach ($array as $link)
    <li>
        <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
    </li>
@endforeach