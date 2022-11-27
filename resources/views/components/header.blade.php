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
            <div id="menu-toggle" class="space-y-2 sm:hidden">
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
            </div>
            <nav id="menu-nav" class="header-nav hidden sm:flex">
                <a href="{{ route('index') }}">Anasayfa</a>
                <a href="{{ route('contact') }}" class="get-offer-trigger">Teklif Al</a>
                <a href="{{ route('contact') }}">İletişim</a>
            </nav>
        </div>
    </div>
    <div class="header-right">
        <div class="header-search">
            {{--            <input type="text" placeholder="Ara.." class="header-search-input"/>--}}
            <div class="gcse-search"></div>
            {{--            <button class="header-search-submit">--}}
            {{--                <i class="lni lni-search-alt"></i>--}}
            {{--            </button>--}}
        </div>
    </div>
</header>
