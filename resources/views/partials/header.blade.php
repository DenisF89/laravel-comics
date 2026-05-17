@php
    $menu = [   
                "CHARACTERS", 
                "COMICS", 
                "MOVIES", 
                "TV", 
                "GAMES", 
                "COLLECTIBLES", 
                "VIDEOS", 
                "FUNS", 
                "NEWS", 
                "SHOP"
            ];
@endphp


<header>
    <div class=" boxed d-flex align-items-center justify-content-between p-3">
    <img class="logo " src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc">
    <nav class="nav">
        <ul class="nav-list d-flex align-items-center">
            @foreach($menu as $item)
                <li class="nav-item">
                    <a  class="nav-link nav-link-custom {{ request()->routeIs(strtolower($item)) ? 'active' : '' }}"
                        href="{{ route(strtolower($item)) }}">{{ $item }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
    </div>
</header>