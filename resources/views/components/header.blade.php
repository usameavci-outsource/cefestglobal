@props([
    'headerOverMain' => false,
    'variant' => 'default',
])

<header class="header{{ $variant ? ' header-' . $variant : '' }}{{ $headerOverMain ? ' header-over-main' : '' }}">
    <div class="header-left"></div>
    <div class="page-container">
        <div class="header-main">
            <a class="header-logo" href="{{ route('index') }}">
                <img src="{{ asset('assets/brand/cefest-global-logo.svg') }}" alt="{{ config('app.name') }}">
            </a>
            <nav class="header-nav">
                <a href="{{ route('index') }}">Anasayfa</a>
                <a href="{{ route('contact') }}">Teklif Al</a>
                <a href="{{ route('services') }}">Hizmetlerimiz</a>
                <a href="{{ route('contact') }}">İletişim</a>
            </nav>
        </div>
    </div>
    <div class="header-right">
        <div class="header-search">
            <input type="text" placeholder="Ara.." class="header-search-input"/>
            <button class="header-search-submit">
                <i class="lni lni-search-alt"></i>
            </button>
        </div>
    </div>
</header>
