<x-default-layout>
    <x-slot:head>
        @vite(['resources/css/pages/contact.css'])
    </x-slot:head>

    <x-header/>

    <main class="page page-contact">
        <div class="section section-contact">
            <div class="page-container">
                <form class="contact-form" action="{{ route('contact-post') }}" method="post">
                    @csrf

                    <div class="contact-form-title">{{ 'Bize Ulaşın,' }}</div>
                    <div class="contact-form-wrap">
                        <div class="contact-form-line">
                            <label class="contact-form-label" for="fullname">{{ 'Adınız Soyadınız:' }}</label>
                            <input class="contact-form-input" type="text" id="fullname" name="fullname" required>
                        </div>
                        <div class="contact-form-line">
                            <label class="contact-form-label" for="email">{{ 'Mail Adresiniz:' }}</label>
                            <input class="contact-form-input" type="email" id="email" name="email" required>
                        </div>
                        <div class="contact-form-line">
                            <label class="contact-form-label" for="message">{{ 'Mesajınız:' }}</label>
                            <textarea class="contact-form-input" id="message" name="message" rows="8"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="contact-form-submit">
                        <button type="submit">
                            {{ 'Mesaj Gönder' }} <i class="lni lni-arrow-right-circle"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <x-footer/>
</x-default-layout>
