<x-default-layout>
    <x-slot:head>
        @vite(['resources/css/pages/contact.css'])
    </x-slot:head>

    <x-header/>

    <main class="page page-contact">
        <div class="section section-contact">
            <div class="page-container">
                <div class="text-6xl mb-12 font-bold">{{ 'Bize Ulaşın,' }}</div>

                <div class="grid grid-cols-4 gap-32">
                    <div class="col-span-2">
                        <h4 class="text-2xl font-semibold mb-12">
                            {{ 'Cefest Lojistik Bilişim Danışmanlık Ve Ticaret Limited Şirketi' }}
                        </h4>
                        <address>
                            <p class="mb-4">
                                <b class="block">Adres</b>
                                <span>Mecidiyeköy Mahallesi, Mecidiyekuyu Sokak, No: 38 Daire:2</span>
                                <span>Şişli / İstanbul</span>
                            </p>
                            <p class="mb-4">
                                <b class="block">VD/VN</b>
                                <span>Zincirlikuyu Vergi Dairesi</span>
                                <span>2040637580</span>
                            </p>
                            <p class="mb-4">
                                <b class="block">Telefon</b>
                                <a href="tel:+908508026204">+90 (850) 802 6204</a>
                            </p>
                        </address>
                    </div>
                    <div class="col-span-2">
                        <form class="contact-form" action="{{ route('contact-post') }}" method="post">
                            @csrf

                            @include('components.contact-form-fields')

                            <div class="contact-form-submit">
                                <button type="submit">
                                    {{ 'Mesaj Gönder' }} <i class="lni lni-arrow-right-circle"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer/>
</x-default-layout>
