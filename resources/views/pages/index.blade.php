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
                    <a class="services-item" href="{{ route('textile') }}">
                        <img src="{{ asset('assets/brand/cefest-tekstil.png') }}" alt="">
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
                        <div class="box-title">{{ 'Misyon' }}</div>
                        <div class="box-content">
                            {{ 'CeFest GLOBAL olarak, uluslararası lojistik operasyonlarımızda, müşteri ihtiyacına odaklı ürünlerin menşeinden, varış noktasına kadar olan tedarik zinciri içindeki malzemelerin, destekleyici hizmetlerin, bilgi akışının etkili ve verimli bir şekilde güvenilir, hızlı ve pratik çözüm ortağınız olmak.' }}
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-title">{{ 'Vizyon' }}</div>
                        <div class="box-content">
                            {{ 'Teknolojik gelişimleri yakından takip ederek, müşterilerine değerli hizmetler sunan, gelişime sürekli yatırım yaparak, iş süreç ve modellerini sürekli geliştirmek isteyen, müşterilere sunduğu entegre lojistik çözümlerle öncü, yapıcı ve uluslararası tanınırlığı olan bir marka yaratmak.' }}
                        </div>
                    </div>
                    <div class="box col-span-2">
                        <div class="box-title">{{ 'Değerlerimiz' }}</div>
                        <div class="box-content items-start grid grid-cols-3 gap-8">
                            <div class="flex flex-col gap-2 text-center">
                                <b>{{ 'Azimliyiz' }}</b>
                                <div
                                    class="body1">{{ 'Hedeflediğimiz sonuçlara pes etmeden ve hata yapmaktan korkmadan koşarız. Yaptığımız her işte başarılı olmamızı hızlı ve verimli çalışmamıza ve başarıya duyduğumuz güçlü arzuya borçluyuz.' }}</div>
                            </div>
                            <div class="flex justify-center flex-col gap-2 text-center">
                                <b>{{ 'Samimiyiz' }}</b>
                                <div
                                    class="body1">{{ 'Tanıştığımız andan itibaren birbirimize güveniriz. Müşterilerimize güvenilir bilgi veririz, geri bildirimlerinden ders çıkarırız. Yürüdüğümüz yolda zorlu yokuşlara denk geldiğimizde enerjimizi düşürmez, ekip olarak çabalarız.' }}</div>
                            </div>
                            <div class="flex justify-center flex-col gap-2 text-center">
                                <b>{{ 'Sosyal Sorumluluk Bilinci ' }}</b>
                                <div
                                    class="body1">{{ 'İnsan ihtiyaçlarına kayıtsız kalmayarak dernek ya da vakıflara bağışta bulunuruz.' }}</div>
                            </div>
                            <div class="flex justify-center flex-col gap-2 text-center">
                                <b>{{ 'Çeviğiz' }}</b>
                                <div
                                    class="body1">{{ 'Koşulların gerektirdiği esneklik ve seri olma yeteneğine sahibiz.' }}</div>
                            </div>
                            <div class="flex justify-center flex-col gap-2 text-center">
                                <b>{{ 'Yenilikçiyiz' }}</b>
                                <div
                                    class="body1">{{ 'Yenilikleri takip eder,daha iyisini yapmak için çabalarız. Çözümlerimizi ve iş modellerimizi sürekli geliştirir ve bizi farklı kılacak olanı mutlaka buluruz.' }}</div>
                            </div>
                            <div class="flex justify-center flex-col gap-2 text-center">
                                <b>{{ 'Sorumluluk Sahibiyiz' }}</b>
                                <div class="body1">{{ 'Söz veririz, sözümüzü tutarız. İlgi gösteririz.' }}</div>
                            </div>
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
                    <div class="scopes-item"><img src="{{ asset('assets/images/textile.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </main>

    <div class="h-64"></div>

    <x-footer/>
</x-default-layout>
