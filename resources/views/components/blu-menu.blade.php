
    @php
        $links = [
            ['img' => 'resources/img/buy-comics-digital-comics.png', 'label' => 'DIGITAL COMICS', 'href' => '#'],
            ['img' => 'resources/img/buy-comics-merchandise.png', 'label' => 'DC MERCHANDISE', 'href' => '#'],
            ['img' => 'resources/img/buy-comics-subscriptions.png', 'label' => 'SUBSCRIPTION', 'href' => '#'],
            ['img' => 'resources/img/buy-comics-shop-locator.png', 'label' => 'COMIC SHOP LOCATOR', 'href' => '#'],
            ['img' => 'resources/img/buy-dc-power-visa.svg', 'label' => 'DC P-VISA', 'href' => '#']
            
        ];
    @endphp

<div class="blu-menu d-flex align-items-center justify-content-center">
    
        <ul class="d-flex align-items-center gap-5 p-2 flex-wrap ">
            @foreach ($links as $link)
                <li>
                        <a href="{{ $link['href'] }}" class="d-flex align-items-center">
                            <img src="{{ Vite::asset($link['img']) }}" alt="{{ $link['label'] }}" class="me-2" style="max-width:40px; max-height:40px;">
                            {{ $link['label'] }}
                        </a>
                </li>
            @endforeach
        </ul>
    
</div>
