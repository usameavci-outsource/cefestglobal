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
                            <div class="features-item">
                                <img src="{{ asset('assets/icons/truck-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item">
                                <img src="{{ asset('assets/icons/ship-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item">
                                <img src="{{ asset('assets/icons/box-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item">
                                <img src="{{ asset('assets/icons/train-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item">
                                <img src="{{ asset('assets/icons/home-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item">
                                <img src="{{ asset('assets/icons/cargo-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item">
                                <img src="{{ asset('assets/icons/transfer-logo.svg') }}" alt="">
                            </div>
                            <div class="features-item">
                                <img src="{{ asset('assets/icons/truck-logo2.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-intro-video">
            <a href="https://www.youtube.com/watch?v=5rg7vgniCZc" class="glightbox">
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
                        <p>{{'Firmamız, uluslararası nakliye avantajları konusunda sizlerin en verimli şekilde hizmet alması
                    için her türlü imkanı sizlerle buluşturmaktadır. Taşınması gereken mallarla ilgili sizlerden bilgi aldıktan
                    sonra detaylı bir çalışma yaparak malların en hızlı ve güvenli şekilde taşınması adına çalışmalar
                    yürütmektedir.'}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-collage">
            <img src="{{ asset('assets/images/collage.png') }}" alt="">
        </div>

        <div class="section section-services">
            <div class="content-title-wrapper">
                <h2 class="content-title">Hizmetlerimiz</h2>
            </div>
            <div class="slider">
                <div class="slider-content">
                    <div class="slider-content-list">
                        <div class="slider-content-item active">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">Karayolu Taşımacılığı</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base pr-8 flex-1">
                                            <p>{{'Karayolu dünyanın hemen hemen her yerinde kesintiye uğramaksızın
                                                devam eden bir ulaşım ağına sahiptir. Kapıdan kapıya lojistik imkanı sunabilen bir
                                                hizmettir. Taşınan malın kaybolma ya da başına bir iş gelme ihtimali son derece
                                                düşüktür. Karayolu taşımacılığıyla mallar birden fazla adrese ulaştırılabilmektedir.
                                                Lojistik sektöründeki gelişmeler sayesinde taşınan malların sigortalanması gibi
                                                garantiye alıcı çözümler bulunmaktadır. Katı, gaz ya da likit halde bulunan pek çok
                                                mal güvenle ve yasal olarak sorunsuz bir şekilde taşınabilmektedir. '}}</p>
                                            <p>{{'Firmamız bütün bu avantajlar gözünde bu alındığında son derece işlevsel
                                                ve verimli olan karayolu taşımacılığı noktasında sizlere en kaliteli ve güvenli hizmeti
                                                sunmak adına var gücüyle çalışmaktadır. '}}</p>
                                        </div>
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <p>{{'Karayolu taşımacılığı özellikleri göz önüne alındığında sağladığı pek çok
                                                avantajdan söz edilebilmektedir. Güvenlik kapsamından maddi konulara vanncaya
                                                kadar hem etkili hem faydalı bir taşımacılık sistemidir. Karayolu taşımacılığının
                                                sağladığı avantajlar şu şekilde sıralayabiliriz:'}}</p>
                                            <ul class="list-disc list-inside">
                                                <li>{{'Taşınan yük gideceği yere aktarmasız olarak taşınmaktadır. Buda zaman
                                                    açısından tasarruf sağlamaktadır.'}}</li>
                                                <li>{{'Yükün cinsine göre taşıma işlemi için uygun taşıma aracı bulmak kolaydır.
                                                    Özellikle kısa mesafe taşımalarda diğer taşıma yöntemlerine oranla daha
                                                    ucuzdur.'}}</li>
                                                <li>{{'Taşımacılık noktasında da piyasa içi çok fazla aktör olması nedeniyle evrak
                                                    ve kağıt gibi işlerin hızlı bir şekilde halledilmesi mümkündür.'}}</li>
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
                        <div class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">Denizyolu Taşımacılığı</div>
                                <div class="slider-content-text">
                                    <div class="flex">
                                        <div class="text-base pr-8 flex-1">
                                            <p>{{'Karayolu dünyanın hemen hemen her yerinde kesintiye uğramaksızın
                                                devam eden bir ulaşım ağına sahiptir. Kapıdan kapıya lojistik imkanı sunabilen bir
                                                hizmettir. Taşınan malın kaybolma ya da başına bir iş gelme ihtimali son derece
                                                düşüktür. Karayolu taşımacılığıyla mallar birden fazla adrese ulaştırılabilmektedir.
                                                Lojistik sektöründeki gelişmeler sayesinde taşınan malların sigortalanması gibi
                                                garantiye alıcı çözümler bulunmaktadır. Katı, gaz ya da likit halde bulunan pek çok
                                                mal güvenle ve yasal olarak sorunsuz bir şekilde taşınabilmektedir. '}}</p>
                                            <p>{{'Firmamız bütün bu avantajlar gözünde bu alındığında son derece işlevsel
                                                ve verimli olan karayolu taşımacılığı noktasında sizlere en kaliteli ve güvenli hizmeti
                                                sunmak adına var gücüyle çalışmaktadır. '}}</p>
                                        </div>
                                        <div class="text-base border-l border-black pl-8 flex-1">
                                            <p>{{'Karayolu taşımacılığı özellikleri göz önüne alındığında sağladığı pek çok
                                                avantajdan söz edilebilmektedir. Güvenlik kapsamından maddi konulara vanncaya
                                                kadar hem etkili hem faydalı bir taşımacılık sistemidir. Karayolu taşımacılığının
                                                sağladığı avantajlar şu şekilde sıralayabiliriz:'}}</p>
                                            <ul class="list-disc list-inside">
                                                <li>{{'Taşınan yük gideceği yere aktarmasız olarak taşınmaktadır. Buda zaman
                                                    açısından tasarruf sağlamaktadır.'}}</li>
                                                <li>{{'Yükün cinsine göre taşıma işlemi için uygun taşıma aracı bulmak kolaydır.
                                                    Özellikle kısa mesafe taşımalarda diğer taşıma yöntemlerine oranla daha
                                                    ucuzdur.'}}</li>
                                                <li>{{'Taşımacılık noktasında da piyasa içi çok fazla aktör olması nedeniyle evrak
                                                    ve kağıt gibi işlerin hızlı bir şekilde halledilmesi mümkündür.'}}</li>
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
                        <div class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">Havayolu Taşımacılığı</div>
                                <div class="slider-content-text"></div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/box-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/box-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">Demiryolu Taşımacılığı</div>
                                <div class="slider-content-text"></div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/train-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/train-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">Depolama Hizmet Çözüm Ortaklığı</div>
                                <div class="slider-content-text"></div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/home-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/home-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">Parsiyel Eşya Taşımacılığı</div>
                                <div class="slider-content-text"></div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/cargo-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/cargo-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">Multimodal Taşımacılık</div>
                                <div class="slider-content-text"></div>
                            </div>
                            <div
                                class="slider-content-image">
                                <img class="slider-content-image-default"
                                     src="{{ asset('assets/icons/transfer-logo.svg') }}" alt="">
                                <img class="slider-content-image-active"
                                     src="{{ asset('assets/icons/transfer-logo-black.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="slider-content-item">
                            <div class="slider-content-wrap">
                                <div class="slider-content-title">Dökme Yük ve Genel Kargo Taşımacılığı</div>
                                <div class="slider-content-text"></div>
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

            <div class="offer-button-wrapper">
                <a href="{{ route('contact') }}" class="offer-button">{{'HEMEN TEKLİF AL!'}}</a>
            </div>
        </div>

        <div class="page-container">
            <hr class="border-black mb-32">
        </div>

        <div class="section section-social-responsibility">
            <div class="page-container">
                <div class="social-responsibility-title-wrapper">
                    <div class="social-responsibility-title">{{ 'SOSYAL SORUMLULUK PROJELERİ' }}</div>
                </div>

                <div class="social-responsibility-text">
                    <p>{{ 'Cefest Lojistik Bilişim Danışmanlık Ve Ticaret Limited Şirketi (Cefest Global) olarak kurulduğu andan itibaren tüm Türkiye ve dünyanın diğer ülkelerinde yardıma ihtiyaç duyan insan ve dünyamızı paylaştığımız diğer canlılara destek olmak için çalışıyoruz. Çözüm ortaklığı ve danışmanlık yaptığımız tüm iş ortaklarımız adına, iş ortaklarımızın belirlediği anlaşmalı olduğumuz kurumlara bağışta bulunarak, yaşamakta olduğumuz dünyayı daha güzel bir yer haline getirmeyi amaçlıyoruz.' }}</p>
                    <p>{{ 'Siz de bizimle aynı ﬁkirdeyseniz çalışmaya başladığımız andan itibaren, yükünüz size ya da alıcıya ulaştıktan sonra,seçeceğiniz kurumlara şeffaf bir şekilde hem sizin adınıza hem de aynı oranda Cefest Global olarak bağışlarımızı yapıyoruz.' }}</p>
                </div>

                <div class="social-responsibility-bottom-line"></div>
            </div>

            <hr class="border-transparent my-12">

            <div class="slider-mini">
                <div class="slider-mini-controls">
                    <button class="slider-mini-control slider-mini-prev">
                        <i class="lni lni-chevron-left"></i>
                    </button>
                    <button class="slider-mini-control slider-mini-next">
                        <i class="lni lni-chevron-right"></i>
                    </button>
                </div>
                <div class="slider-mini-layout">
                    <div class="slider-mini-layout-left"></div>
                    <div class="slider-mini-layout-right"></div>
                </div>
                <div class="slider-mini-slides">
                    <div class="slider-mini-slides-item active">
                        <div class="slider-mini-slides-item-image">
                            <img src="{{ asset('assets/images/slider-mini/kadin-dayanisma-vakfi.png') }}" alt="">
                        </div>
                        <div class="slider-mini-slides-item-text">
                            <div class="slider-mini-slides-item-title">
                                {{ 'KADIN DAYANIŞMA VAKFI' }}
                            </div>
                            <div class="slider-mini-slides-item-subtitle">
                                {{ 'Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için, Şiddetsiz, eşit ve özgür bir dünya için' }}
                            </div>
                            <div class="slider-mini-slides-item-action">
                                <a href="#">{{ 'Bağış Yap' }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-mini-slides-item">
                        <div class="slider-mini-slides-item-image">
                            <img src="{{ asset('assets/images/slider-mini/kadin-dayanisma-vakfi.png') }}" alt="">
                        </div>
                        <div class="slider-mini-slides-item-text">
                            <div class="slider-mini-slides-item-title">
                                {{ 'KADIN DAYANIŞMA VAKFI 2' }}
                            </div>
                            <div class="slider-mini-slides-item-subtitle">
                                {{ 'Şiddetsiz, eşit ve özgür bir dünya için' }}
                            </div>
                            <div class="slider-mini-slides-item-action">
                                <a href="#">{{ 'Bağış Yap' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-mini-dots">
                    <button class="slider-mini-dots-item active"></button>
                    <button class="slider-mini-dots-item"></button>
                </div>
            </div>
        </div>

        <div class="section section-contact">
            <div class="page-container">
                <form class="contact-form" action="{{ route('contact-post') }}" method="post">
                    @csrf

                    <div class="contact-form-title">{{ 'Bize Ulaşın,' }}</div>
                    <div class="contact-form-wrap">
                        <div class="contact-form-line-group">
                            <div class="contact-form-line">
                                <label class="contact-form-label" for="fullname">{{ 'Adınız Soyadınız:' }}</label>
                                <input value="{{ old('fullname') }}" class="contact-form-input" type="text"
                                       id="fullname" name="fullname" required>
                            </div>
                            <div class="contact-form-line">
                                <label class="contact-form-label" for="email">{{ 'Mail Adresiniz:' }}</label>
                                <input value="{{ old('email') }}" class="contact-form-input" type="email" id="email"
                                       name="email" required>
                            </div>
                        </div>
                        <div class="contact-form-line">
                            <label class="contact-form-label" for="message">{{ 'Mesajınız:' }}</label>
                            <textarea class="contact-form-input" id="message" name="message" rows="8"
                                      required>{{ old('message') }}</textarea>
                        </div>
                        <div class="contact-form-submit">
                            <button type="submit">
                                <i class="lni lni-arrow-right-circle"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <x-footer/>
</x-default-layout>
