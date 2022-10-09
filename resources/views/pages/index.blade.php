<x-default-layout>
    <x-slot:head>
        @vite(['resources/css/pages/index.css'])
    </x-slot:head>

    <x-header/>

    <main class="page page-index">
        <div class="section section-services">
            <div class="page-container">
                <div class="services">
                    <a class="services-item" href="{{ route('logistics') }}">
                        <img src="{{ asset('assets/brand/cefest-lojistik.svg') }}" alt="">
                    </a>
                    <a class="services-item" href="{{ route('technology') }}">
                        <img src="{{ asset('assets/brand/cefest-bilisim.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <img class="section-services-bg" src="{{ asset('assets/images/section-services-bg.jpg') }}" alt="">
        </div>

        <div class="section section-mission-vision">
            <div class="page-container">
                <div class="mission-vision-inner">
                    <div class="box">
                        <div class="box-title">Misyon</div>
                        <div class="box-content">
                            {{ 'Cefest olarak, uluslararası lojistik operasyonlarımızda,çıkış noktasından varış noktasına kadar uygun maliyetli ve zamandan tasarruf sağlayabileceğiniz güvenilir, hızlı ve pratik çözüm ortağınız olmak.' }}
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-title">Vizyon</div>
                        <div class="box-content">
                            {{ 'Küresel lojistik yapı içerisinde teknolojik, yenilikçi ve güvenilir çözümler üreterek tercih edilen öncü kurum olmak.' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-scopes">
            <div class="page-container">
                <div class="scopes">
                    <div class="scopes-item"><img src="{{ asset('assets/images/train.png') }}" alt=""></div>
                    <div class="scopes-item"><img src="{{ asset('assets/images/chip.png') }}" alt=""></div>
                    <div class="scopes-item"><img src="{{ asset('assets/images/plane.png') }}" alt=""></div>
                    <div class="scopes-item"><img src="{{ asset('assets/images/circuit-board.png') }}" alt=""></div>
                    <div class="scopes-item"><img src="{{ asset('assets/images/ship.png') }}" alt=""></div>
                    <div class="scopes-item"><img src="{{ asset('assets/images/coding.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </main>

    <div class="h-64"></div>

    <x-footer/>
</x-default-layout>
