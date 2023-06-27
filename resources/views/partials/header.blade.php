<header class="p-3">
    <img class="logo" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Laravel Logo">
    <span>Some links: </span>
    @foreach ($links as $link)
        <a href="{{ $link['href'] }}" class="hover:underline text-blue-600 hover:text-sky-600 hover:font-bold mx-2">{{ $link['text'] }}</a>
    @endforeach
</header>
