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
                <h2 class="content-title">Uluslararası Nakliye</h2>
                <div class="content-blocks">
                    <div class="content-left">
                        <img src="{{ asset('assets/images/poster.jpg') }}" alt="">
                    </div>
                    <div class="content-right">
                        <p>{{'Uluslararası taşımacılık, lojistik alanının en önemli ve en detaylı konularından biridir. Malların
                        bir ülkeden başka bir ülkeye taşınması anlamındaki uluslararası taşımacılık da dikkat edilmesi gereken
                        pek çok unsur vardır. Hangi malın en verimli şekilde nasıl taşınacağı konusunda son derece dikkatli ve
                        titiz çalışmalar yapmak gerekmektedir. Bu noktada Cefest Lojistik olarak sahip olduğumuz derin
                        tecrübe ve deneyimle, işinde uzman çalışanlarla en kusursuz hizmet vermek adına tüm gücüyle
                        çalışmaktadır.'}}</p>
                        <p>{{'Firmamız, uluslararası nakliye avantajları konusunda sizlerin en verimli şekilde hizmet alması için
                         lojistik operasyonlarınızda firmanızın çözüm ortağı olarak her türlü imkanı sizlerle buluşturmaktadır.
                         Geniş acente ağımız ile istek ve ihtiyaçlarınız doğrultusunda sizlere en doğru taşıma şekli ile hızlı,
                         güvenilir taşınması adına çalışmalar yürütmektedir.'}}</p>
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
                                <div class="slider-content-title">{{ 'Karayolu Taşımacılığı' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'İthalat/İhracat/Transit ve üçüncü ülkeler arası Taşımaları' }}</li>
                                                <li>{{ 'Komple(FCL) / Parsiyel(LCL) Taşımaları' }}</li>
                                                <li>{{ 'Yurt içi konteyner ve parsiyel Taşımalar' }}</li>
                                                <li>{{ 'Liman/Depo - müşteri - liman/depo dolu konteyner taşımaları' }}</li>
                                                <li>{{ 'Gümrükleme ve sigorta işlemleri' }}</li>
                                                <li>{{ 'Özel ekipman taşımaları' }}</li>
                                                <li>{{ 'Güvenilir, hızlı ve ekonomik hizmet' }}</li>
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
                                <div class="slider-content-title">{{ 'Denizyolu Taşımacılığı' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'Full Konteyner Yükleme (FCL)/Parsiyel Konteyner Yükleme (LCL)' }}</li>
                                                <li>{{ 'Özel Konteyner Seçenekleri (Opentop, Flatrack, Reefer, IsoTank) ile Taşımalar' }}</li>
                                                <li>{{ 'Kapıdan kapıya teslim taşımalar (Door to Door)' }}</li>
                                                <li>{{ 'Limandan Limana Teslim' }}</li>
                                                <li>{{ 'Güvenilir ve Zamanında Teslimat' }}</li>
                                                <li>{{ 'Tüm dünyaya düzenli sevkiyat ve yaygın acente ağı' }}</li>
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
                                <div class="slider-content-title">{{ 'Havayolu Taşımacılığı' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'Tüm dünyada oluşturduğumuz geniş hizmet ağımız ile birlikte tüm' }}</li>
                                                <li>{{ 'taleplerinize yönelik uluslararası havayolu taşımalarınız için' }}</li>
                                                <li>{{ 'hava nakliye hizmeti sunuyoruz.' }}</li>
                                                <li>{{ 'Yüksek hızda taşımayla teslim süresinin kısalması, lojistiğe konu olan eşyanın
                                                    ulaşımında dünya geneline yayılmış havaalanı ağının varlığının yüksek emniyet ve
                                                    güvenilirliğinin sağlanması, kargoların elleçleme ve yüklenmesinde gösterilen özen,
                                                    planlı ve tarifeli kargo hareketleri avantaj sağlamaktadır.' }}</li>
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
                                <div class="slider-content-title">{{ 'Demiryolu Taşımacılığı' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'Standart konteyner ölçüleri dışındaki yüklerin özel  konteyner ile taşınmaları' }}</li>
                                                <li>{{ 'Ağır tonajlı ve geniş ebatlı yüklerin özel  araçlar ile taşınmaları' }}</li>
                                                <li>{{ 'İhtiyaç halinde lowbed ve gemi kiralama' }}</li>
                                                <li>{{ 'Özel izine bağlı taşımalar' }}</li>
                                                <li>{{ 'Çok modlu (multimodal) taşımacılık' }}</li>
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
                                <div class="slider-content-title">{{ 'Depolama Hizmet Çözüm Ortaklığı' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base pr-8 flex-1">{{ 'Cefest Global olarak, yükünüzü alıcıya
                                        gönderilmeden önce anlaşmalı olduğumuz çözüm ortaklarımız ile uygun fiyat ve
                                        güvenli hizmet anlayışımızla hizmetinizdeyiz. Kalite standartlarınızı ve kurumsal
                                         beklentilerinizi karşılayabilecek depolama hizmetiyle doğru depolama hizmet çözüm
                                         ortaklığında iş birliği yapabilirsiniz. Depolama için sevk edeceğiniz mal ve yükleriniz
                                         profesyonel depolama alanında güvendedir.' }}</div>
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'Gümrüklü Antrepo Hizmeti' }}</li>
                                                <li>{{ 'Yanıcı (ADR) Antrepo Hizmeti' }}</li>
                                                <li>{{ 'Serbest Depo' }}</li>
                                                <li>{{ 'Soğuk Hava Depo Hizmetleri' }}</li>
                                                <li>{{ 'Özel Eşya Depolama Hizmeti' }}</li>
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
                                <div class="slider-content-title">{{ 'Parsiyel Eşya Taşımacılığı' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'Parsiyel eşya taşıma genel olarak denizyolu ile ithalat ve ihracatta uygulanan özel bir dağıtım sistemidir.' }}</li>
                                                <li>{{ 'Parsiyel eşya taşımacılığı sistemimizde, müşterilerimizin memnuniyetini sağlamak adına hıza ve maliyet avantajına önem veriyoruz' }}</li>
                                                <li>{{ 'Parsiyel lojistik hizmetimizi sunmak üzere her geçen gün geliştirdiğimiz hizmet ağımızda başta İstanbul olmak üzere İzmit, Gemlik, İzmir, Mersin, Antalya ve İskenderun Limanlarından ithalat ve ihracat parsiyel servislerimiz bulunmaktadır.' }}</li>
                                                <li>{{ 'Bir çok alanda ve serviste parsiyel taşımacılığı gerçekleştirmekteyiz.' }}</li>
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
                                <div class="slider-content-title">{{ 'Multimodal Taşımacılık' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base pr-8 flex-1">
                                            <ul class="list-disc list-inside">
                                                <li>{{ 'En az iki adet lojistik servisin kullanıldığı; sözleşmenin ve evrağın tek sorumlu tarafından ulaştırıldığı taşımacılık işlemine “multimodal taşımacılık” denir. Ulaşım için tek bir sözleşme imzalanır ve buna bağlı kalınarak işlem tamamlanır.' }}</li>
                                                <li>{{ 'Güzergah boyunca farklı rotalardan geçen kargo, rotasını değiştirmeden konteynerlar arası aktarılır. Multimodal taşımacılık genellikle dökme yük taşırken kullanılır. Entegre bir sistem olan multimodal taşımacılıkta yükler, taşındıkları ekipmandan bir diğerine aktarılır. Yüklerin çıkış yaptığı noktadan vardığı noktaya kadar olan tüm yollar için sözleşme tektir.' }}</li>
                                                <li>{{ 'Multimodal taşımacılıkta tüm taşıma yolları kullanılabilir. Yüklerin güvenle taşınması için hangi yolların tercih edilmesi gerektiğine karar verilir ve planlama bu doğrultuda gerçekleştirilir. Örneğin; bir yük karayolu ile başladığı yolculuğuna konteyner değişikliği yaparak havayolu ile devam edebilir.' }}</li>
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
                                <div class="slider-content-title">{{ 'Dökme Yük ve Genel Kargo Taşımacılığı' }}</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base pr-8 flex-1">{{ 'Modern ve uygun ekipmanlar ile 70.000 DWT\'luk
                                        dökme yük gemilerine kadar hizmet verilmektedir. Limanda gübre, mısır, buğday, kepek,
                                        soya fasulyesi vb. tahıl ürünleri olan dökme yükler ile boru, rulo saç, demir, paletli,
                                        big bag\'li, sling bag\'li vb. genel yükler elleçlenmektedir.' }}</div>
                                        <div class="text-base pr-8 flex-1"></div>
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
                <div class="slider-image">
                    <img src="{{ asset('assets/images/slider/truck.png') }}" alt="">
                </div>
            </div>

            {{--            <div class="offer-button-wrapper">--}}
            {{--                <a href="{{ route('contact') }}" class="offer-button">{{'HEMEN TEKLİF AL!'}}</a>--}}
            {{--            </div>--}}
        </div>

        {{--        <div class="page-container">--}}
        {{--            <hr class="border-black mb-32">--}}
        {{--        </div>--}}

        <hr class="border-transparent my-12">

        <div class="section section-social-responsibility">
            <div class="page-container">
                <div class="social-responsibility-title-wrapper">
                    <div class="social-responsibility-title">{{ 'SOSYAL SORUMLULUK PROJELERİ' }}</div>
                </div>

                <div class="social-responsibility-text">
                    <p>{{ 'CeFest Global kurulduğu andan itibaren tüm Türkiye ve dünyanın diğer ülkelerinde
                        yardıma ihtiyaç duyan insan ve dünyamızı paylaştığımız diğer canlılara destek oluyoruz.
                        Çözüm ortaklığı ve danışmanlık yaptığımız tüm iş ortaklarımız adına dernek ve vakıflara
                        bağışta bulunarak, yaşamakta olduğumuz dünyayı daha güzel bir yer haline getirmeyi
                        istiyoruz.' }}</p>
                </div>

                <div class="social-responsibility-bottom-line"></div>
            </div>

            <hr class="border-transparent my-12">

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
            {{--                                {{ 'KADIN DAYANIŞMA VAKFI' }}--}}
            {{--                            </div>--}}
            {{--                            <div class="slider-mini-slides-item-subtitle">--}}
            {{--                                {{ 'Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için' }}--}}
            {{--                            </div>--}}
            {{--                            <div class="slider-mini-slides-item-action">--}}
            {{--                                <a href="#">{{ 'Bağış Yap' }}</a>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="slider-mini-slides-item">--}}
            {{--                        <div class="slider-mini-slides-item-image">--}}
            {{--                            <img src="{{ asset('assets/images/slider-mini/kadin-dayanisma-vakfi.png') }}" alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="slider-mini-slides-item-text">--}}
            {{--                            <div class="slider-mini-slides-item-title">--}}
            {{--                                {{ 'KADIN DAYANIŞMA VAKFI 2' }}--}}
            {{--                            </div>--}}
            {{--                            <div class="slider-mini-slides-item-subtitle">--}}
            {{--                                {{ 'Şiddetsiz, eşit ve özgür bir dünya için' }}--}}
            {{--                            </div>--}}
            {{--                            <div class="slider-mini-slides-item-action">--}}
            {{--                                <a href="#">{{ 'Bağış Yap' }}</a>--}}
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

        {{--                    <div class="contact-form-title">{{ 'Bize Ulaşın,' }}</div>--}}
        {{--                    <div class="contact-form-wrap">--}}
        {{--                        <div class="contact-form-line-group">--}}
        {{--                            <div class="contact-form-line">--}}
        {{--                                <label class="contact-form-label" for="fullname">{{ 'Adınız Soyadınız:' }}</label>--}}
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
        {{--                            <label class="contact-form-label" for="message">{{ 'Mesajınız:' }}</label>--}}
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
