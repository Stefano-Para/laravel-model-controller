@php
    $menu = [
    [
        "link" => "Home",
        "text" => "Home"
    ],
    [
        "link" => "Prima",
        "text" => "Prima pagina"
    ],
    [
        "link" => "Seconda",
        "text" => "Seconda pagina"
    ],
    ]

@endphp


<header>
    Header
    <h1>Quì stampiamo il Route::currentName: "{{ Route::currentRouteName() }}"</h1>
    <ul>
        @foreach ($menu as $item)
            <li>
                <a href="{{ route($item["link"]) }}"
                class="{{ Route::currentRouteName() == $item["link"] ? 'active' : ''}}">{{ $item["text"] }}</a>
            </li>
        @endforeach
        {{-- <li>
            <a href="{{ route("Home") }}">Home</a>
        </li>
        <li>
            <a href="{{ route("Prima") }}">Prima Pagina</a>
        </li>
        <li>
            <a href="{{ route("Seconda") }}">Seconda Pagina</a>
        </li> --}}
    </ul>
</header>