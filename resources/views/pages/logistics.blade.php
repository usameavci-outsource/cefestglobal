<x-default-layout>
    <x-slot:head>
        @vite(['resources/css/pages/logistics.css'])
    </x-slot:head>

    <x-header header-over-main="true" variant="white"/>

    <main class="page page-logistics">
        <div class="page-top">
            <div class="section section-jumbotron">
                <img src="{{ asset('assets/brand/cefest-lojistik.svg') }}" alt="CeFest Lojistik">
            </div>
            <div class="section section-features">
                <div class="section-features-inner">
                    <div class="page-container">
                        <div class="features">
                            <div class="features-item" data-target="#service-slider-1">
                                <img src="{{ asset('assets/icons/truck-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item" data-target="#service-slider-2">
                                <img src="{{ asset('assets/icons/ship-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item" data-target="#service-slider-3">
                                <img src="{{ asset('assets/icons/box-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item" data-target="#service-slider-4">
                                <img src="{{ asset('assets/icons/train-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item" data-target="#service-slider-5">
                                <img src="{{ asset('assets/icons/home-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item" data-target="#service-slider-6">
                                <img src="{{ asset('assets/icons/cargo-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item" data-target="#service-slider-7">
                                <img src="{{ asset('assets/icons/transfer-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item" data-target="#service-slider-8">
                                <img src="{{ asset('assets/icons/truck-logo2.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-intro-video">
            <a href="{{ asset('assets/intro-video.mp4') }}" class="glightbox">
                <img class="intro-video-play-button" src="{{ asset('assets/icons/play-button.png') }}" alt="play">
            </a>
        </div>

        <div class="section section-transportation">
            <div class="page-container">
                <h2 class="content-title">Uluslararas?? Nakliye</h2>
                <div class="content-blocks">
                    <div class="content-left">
                        <img src="{{ asset('assets/images/poster.jpg') }}" alt="">
                    </div>
                    <div class="content-right">
                        <p>{{'Uluslararas?? ta????mac??l??k, lojistik alan??n??n en ??nemli ve en detayl?? konular??ndan biridir. Mallar??n
                        bir ??lkeden ba??ka bir ??lkeye ta????nmas?? anlam??ndaki uluslararas?? ta????mac??l??k da dikkat edilmesi gereken
                        pek ??ok unsur vard??r. Hangi mal??n en verimli ??ekilde nas??l ta????naca???? konusunda son derece dikkatli ve
                        titiz ??al????malar yapmak gerekmektedir. Bu noktada Cefest Lojistik olarak sahip oldu??umuz derin
                        tecr??be ve deneyimle, i??inde uzman ??al????anlarla en kusursuz hizmet vermek ad??na t??m g??c??yle
                        ??al????maktad??r.'}}</p>
                        <p>{{'Firmam??z, uluslararas?? nakliye avantajlar?? konusunda sizlerin en verimli ??ekilde hizmet almas?? i??in
                         lojistik operasyonlar??n??zda firman??z??n ????z??m orta???? olarak her t??rl?? imkan?? sizlerle bulu??turmaktad??r.
                         Geni?? acente a????m??z ile istek ve ihtiya??lar??n??z do??rultusunda sizlere en do??ru ta????ma ??ekli ile h??zl??,
                         g??venilir ta????nmas?? ad??na ??al????malar y??r??tmektedir.'}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-collage">
            <img src="{{ asset('assets/images/collage.png') }}" alt="">
        </div>

        <div class="section section-services">
            <div class="content-title-wrapper">
                <h2 class="content-title">{{ 'Hizmetlerimiz' }}</h2>
            </div>
            <div class="slider">
                <div class="slider-content">
                    <div class="slider-content-list">
                        <div id="service-slider-1" class="slider-content-item active">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">{{ 'Karayolu Ta????mac??l??????' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ '??thalat/??hracat/Transit ve ??????nc?? ??lkeler aras?? Ta????malar??' }}</li>
                                                <li>{{ 'Komple(FCL) / Parsiyel(LCL) Ta????malar??' }}</li>
                                                <li>{{ 'Yurt i??i konteyner ve parsiyel Ta????malar' }}</li>
                                                <li>{{ 'Liman/Depo - m????teri - liman/depo dolu konteyner ta????malar??' }}</li>
                                                <li>{{ 'G??mr??kleme ve sigorta i??lemleri' }}</li>
                                                <li>{{ '??zel ekipman ta????malar??' }}</li>
                                                <li>{{ 'G??venilir, h??zl?? ve ekonomik hizmet' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/truck-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/truck-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div id="service-slider-2" class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">{{ 'Denizyolu Ta????mac??l??????' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'Full Konteyner Y??kleme (FCL)/Parsiyel Konteyner Y??kleme (LCL)' }}</li>
                                                <li>{{ '??zel Konteyner Se??enekleri (Opentop, Flatrack, Reefer, IsoTank) ile Ta????malar' }}</li>
                                                <li>{{ 'Kap??dan kap??ya teslim ta????malar (Door to Door)' }}</li>
                                                <li>{{ 'Limandan Limana Teslim' }}</li>
                                                <li>{{ 'G??venilir ve Zaman??nda Teslimat' }}</li>
                                                <li>{{ 'T??m d??nyaya d??zenli sevkiyat ve yayg??n acente a????' }}</li>
                                                <li>{{ 'Deneyimli uzman kadro' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/ship-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/ship-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div id="service-slider-3" class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">{{ 'Havayolu Ta????mac??l??????' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'T??m d??nyada olu??turdu??umuz geni?? hizmet a????m??z ile birlikte t??m' }}</li>
                                                <li>{{ 'taleplerinize y??nelik uluslararas?? havayolu ta????malar??n??z i??in' }}</li>
                                                <li>{{ 'hava nakliye hizmeti sunuyoruz.' }}</li>
                                                <li>{{ 'Y??ksek h??zda ta????mayla teslim s??resinin k??salmas??, lojisti??e konu olan e??yan??n
                                                    ula????m??nda d??nya geneline yay??lm???? havaalan?? a????n??n varl??????n??n y??ksek emniyet ve
                                                    g??venilirli??inin sa??lanmas??, kargolar??n elle??leme ve y??klenmesinde g??sterilen ??zen,
                                                    planl?? ve tarifeli kargo hareketleri avantaj sa??lamaktad??r.' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/box-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/box-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div id="service-slider-4" class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">{{ 'Demiryolu Ta????mac??l??????' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'Standart konteyner ??l????leri d??????ndaki y??klerin ??zel  konteyner ile ta????nmalar??' }}</li>
                                                <li>{{ 'A????r tonajl?? ve geni?? ebatl?? y??klerin ??zel  ara??lar ile ta????nmalar??' }}</li>
                                                <li>{{ '??htiya?? halinde lowbed ve gemi kiralama' }}</li>
                                                <li>{{ '??zel izine ba??l?? ta????malar' }}</li>
                                                <li>{{ '??ok modlu (multimodal) ta????mac??l??k' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/train-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/train-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div id="service-slider-5" class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">{{ 'Depolama Hizmet ????z??m Ortakl??????' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="text-base pr-8 flex-1">{{ 'Cefest Global olarak, y??k??n??z?? al??c??ya
                                        g??nderilmeden ??nce anla??mal?? oldu??umuz ????z??m ortaklar??m??z ile uygun fiyat ve
                                        g??venli hizmet anlay??????m??zla hizmetinizdeyiz. Kalite standartlar??n??z?? ve kurumsal
                                         beklentilerinizi kar????layabilecek depolama hizmetiyle do??ru depolama hizmet ????z??m
                                         ortakl??????nda i?? birli??i yapabilirsiniz. Depolama i??in sevk edece??iniz mal ve y??kleriniz
                                         profesyonel depolama alan??nda g??vendedir.' }}</div>
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'G??mr??kl?? Antrepo Hizmeti' }}</li>
                                                <li>{{ 'Yan??c?? (ADR) Antrepo Hizmeti' }}</li>
                                                <li>{{ 'Serbest Depo' }}</li>
                                                <li>{{ 'So??uk Hava Depo Hizmetleri' }}</li>
                                                <li>{{ '??zel E??ya Depolama Hizmeti' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/home-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/home-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div id="service-slider-6" class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">{{ 'Parsiyel E??ya Ta????mac??l??????' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'Parsiyel e??ya ta????ma genel olarak denizyolu ile ithalat ve ihracatta uygulanan ??zel bir da????t??m sistemidir.' }}</li>
                                                <li>{{ 'Parsiyel e??ya ta????mac??l?????? sistemimizde, m????terilerimizin memnuniyetini sa??lamak ad??na h??za ve maliyet avantaj??na ??nem veriyoruz' }}</li>
                                                <li>{{ 'Parsiyel lojistik hizmetimizi sunmak ??zere her ge??en g??n geli??tirdi??imiz hizmet a????m??zda ba??ta ??stanbul olmak ??zere ??zmit, Gemlik, ??zmir, Mersin, Antalya ve ??skenderun Limanlar??ndan ithalat ve ihracat parsiyel servislerimiz bulunmaktad??r.' }}</li>
                                                <li>{{ 'Bir ??ok alanda ve serviste parsiyel ta????mac??l?????? ger??ekle??tirmekteyiz.' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/cargo-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/cargo-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div id="service-slider-7" class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">{{ 'Multimodal Ta????mac??l??k' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base pr-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'En az iki adet lojistik servisin kullan??ld??????; s??zle??menin ve evra????n tek sorumlu taraf??ndan ula??t??r??ld?????? ta????mac??l??k i??lemine ???multimodal ta????mac??l??k??? denir. Ula????m i??in tek bir s??zle??me imzalan??r ve buna ba??l?? kal??narak i??lem tamamlan??r.' }}</li>
                                                <li>{{ 'G??zergah boyunca farkl?? rotalardan ge??en kargo, rotas??n?? de??i??tirmeden konteynerlar aras?? aktar??l??r. Multimodal ta????mac??l??k genellikle d??kme y??k ta????rken kullan??l??r. Entegre bir sistem olan multimodal ta????mac??l??kta y??kler, ta????nd??klar?? ekipmandan bir di??erine aktar??l??r. Y??klerin ????k???? yapt?????? noktadan vard?????? noktaya kadar olan t??m yollar i??in s??zle??me tektir.' }}</li>
                                                <li>{{ 'Multimodal ta????mac??l??kta t??m ta????ma yollar?? kullan??labilir. Y??klerin g??venle ta????nmas?? i??in hangi yollar??n tercih edilmesi gerekti??ine karar verilir ve planlama bu do??rultuda ger??ekle??tirilir. ??rne??in; bir y??k karayolu ile ba??lad?????? yolculu??una konteyner de??i??ikli??i yaparak havayolu ile devam edebilir.' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/transfer-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/transfer-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div id="service-slider-8" class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">{{ 'D??kme Y??k ve Genel Kargo Ta????mac??l??????' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base pr-8 flex-1">{{ 'Modern ve uygun ekipmanlar ile 70.000 DWT\'luk
                                        d??kme y??k gemilerine kadar hizmet verilmektedir. Limanda g??bre, m??s??r, bu??day, kepek,
                                        soya fasulyesi vb. tah??l ??r??nleri olan d??kme y??kler ile boru, rulo sa??, demir, paletli,
                                        big bag\'li, sling bag\'li vb. genel y??kler elle??lenmektedir.' }}</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/truck-logo2.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/truck-logo2-black.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{--                <div class="slider-image">--}}
                {{--                    <img src="{{ asset('assets/images/slider/truck.png') }}" alt="">--}}
                {{--                </div>--}}
            </div>

            {{--            <div class="offer-button-wrapper">--}}
            {{--                <a href="{{ route('contact') }}" class="offer-button">{{'HEMEN TEKL??F AL!'}}</a>--}}
            {{--            </div>--}}
        </div>

        {{--        <div class="page-container">--}}
        {{--            <hr class="border-black mb-32">--}}
        {{--        </div>--}}

        <hr class="border-transparent my-12">

        <div class="section section-social-responsibility">
            <div class="page-container">
                <div class="social-responsibility-title-wrapper">
                    <div class="social-responsibility-title">{{ 'SOSYAL SORUMLULUK PROJELER??' }}</div>
                </div>

                <div class="social-responsibility-text">
                    <p>{{ 'CeFest Global kuruldu??u andan itibaren t??m T??rkiye ve d??nyan??n di??er ??lkelerinde
                        yard??ma ihtiya?? duyan insan ve d??nyam??z?? payla??t??????m??z di??er canl??lara destek oluyoruz.
                        ????z??m ortakl?????? ve dan????manl??k yapt??????m??z t??m i?? ortaklar??m??z ad??na dernek ve vak??flara
                        ba??????ta bulunarak, ya??amakta oldu??umuz d??nyay?? daha g??zel bir yer haline getirmeyi
                        istiyoruz.' }}</p>
                </div>

                <div class="social-responsibility-bottom-line"></div>
            </div>

            <hr class="border-transparent my-12 hidden sm:block">

            {{--            <div class="slider-mini">--}}
            {{--                <div class="slider-mini-controls">--}}
            {{--                    <button class="slider-mini-control slider-mini-prev">--}}
            {{--                        <i class="lni lni-chevron-left"></i>--}}
            {{--                    </button>--}}
            {{--                    <button class="slider-mini-control slider-mini-next">--}}
            {{--                        <i class="lni lni-chevron-right"></i>--}}
            {{--                    </button>--}}
            {{--                </div>--}}
            {{--                <div class="slider-mini-layout">--}}
            {{--                    <div class="slider-mini-layout-left"></div>--}}
            {{--                    <div class="slider-mini-layout-right"></div>--}}
            {{--                </div>--}}
            {{--                <div class="slider-mini-slides">--}}
            {{--                    <div class="slider-mini-slides-item active">--}}
            {{--                        <div class="slider-mini-slides-item-image">--}}
            {{--                            <img src="{{ asset('assets/images/slider-mini/kadin-dayanisma-vakfi.png') }}" alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="slider-mini-slides-item-text">--}}
            {{--                            <div class="slider-mini-slides-item-title">--}}
            {{--                                {{ 'KADIN DAYANI??MA VAKFI' }}--}}
            {{--                            </div>--}}
            {{--                            <div class="slider-mini-slides-item-subtitle">--}}
            {{--                                {{ '??iddetsiz, e??it ve ??zg??r bir d??nya i??in, ??iddetsiz, e??it ve ??zg??r bir d??nya i??in, ??iddetsiz, e??it ve ??zg??r bir d??nya i??in, ??iddetsiz, e??it ve ??zg??r bir d??nya i??in, ??iddetsiz, e??it ve ??zg??r bir d??nya i??in, ??iddetsiz, e??it ve ??zg??r bir d??nya i??in' }}--}}
            {{--                            </div>--}}
            {{--                            <div class="slider-mini-slides-item-action">--}}
            {{--                                <a href="#">{{ 'Ba?????? Yap' }}</a>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="slider-mini-slides-item">--}}
            {{--                        <div class="slider-mini-slides-item-image">--}}
            {{--                            <img src="{{ asset('assets/images/slider-mini/kadin-dayanisma-vakfi.png') }}" alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="slider-mini-slides-item-text">--}}
            {{--                            <div class="slider-mini-slides-item-title">--}}
            {{--                                {{ 'KADIN DAYANI??MA VAKFI 2' }}--}}
            {{--                            </div>--}}
            {{--                            <div class="slider-mini-slides-item-subtitle">--}}
            {{--                                {{ '??iddetsiz, e??it ve ??zg??r bir d??nya i??in' }}--}}
            {{--                            </div>--}}
            {{--                            <div class="slider-mini-slides-item-action">--}}
            {{--                                <a href="#">{{ 'Ba?????? Yap' }}</a>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="slider-mini-dots">--}}
            {{--                    <button class="slider-mini-dots-item active"></button>--}}
            {{--                    <button class="slider-mini-dots-item"></button>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>

        {{--        <div class="section section-contact">--}}
        {{--            <div class="page-container">--}}
        {{--                <form class="contact-form" action="{{ route('contact-post') }}" method="post">--}}
        {{--                    @csrf--}}

        {{--                    <div class="contact-form-title">{{ 'Bize Ula????n,' }}</div>--}}
        {{--                    <div class="contact-form-wrap">--}}
        {{--                        <div class="contact-form-line-group">--}}
        {{--                            <div class="contact-form-line">--}}
        {{--                                <label class="contact-form-label" for="fullname">{{ 'Ad??n??z Soyad??n??z:' }}</label>--}}
        {{--                                <input value="{{ old('fullname') }}" class="contact-form-input" type="text"--}}
        {{--                                       id="fullname" name="fullname" required>--}}
        {{--                            </div>--}}
        {{--                            <div class="contact-form-line">--}}
        {{--                                <label class="contact-form-label" for="email">{{ 'Mail Adresiniz:' }}</label>--}}
        {{--                                <input value="{{ old('email') }}" class="contact-form-input" type="email" id="email"--}}
        {{--                                       name="email" required>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="contact-form-line">--}}
        {{--                            <label class="contact-form-label" for="message">{{ 'Mesaj??n??z:' }}</label>--}}
        {{--                            <textarea class="contact-form-input" id="message" name="message" rows="8"--}}
        {{--                                      required>{{ old('message') }}</textarea>--}}
        {{--                        </div>--}}
        {{--                        <div class="contact-form-submit">--}}
        {{--                            <button type="submit">--}}
        {{--                                <i class="lni lni-arrow-right-circle"></i>--}}
        {{--                            </button>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </form>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </main>

    <x-footer/>
</x-default-layout>
