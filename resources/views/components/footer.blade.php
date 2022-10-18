<footer class="footer">
    <div class="footer-top">
        <div class="page-container">
            <div class="footer-services">
                <a class="footer-services-item" href="{{ route('index') }}">
                    <img src="{{asset('assets/brand/cefest-global-logo.svg')}}" alt="">
                </a>
                <a class="footer-services-item" href="{{ route('logistics') }}">
                    <img src="{{asset('assets/brand/cefest-lojistik-duz.svg')}}" alt="">
                </a>
                <a class="footer-services-item" href="{{ route('technology') }}">
                    <img src="{{asset('assets/brand/cefest-bilisim-duz.svg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="footer-contact">
        <a class="footer-contact-item" href="tel:+908508026204">
            <i class="lni lni-phone"></i>
            <span>+90 (850) 802 6204</span>
        </a>
        <a class="footer-contact-item" href="mailto:info@cefestglobal.com">
            <i class="lni lni-envelope"></i>
            <span>info@cefestglobal.com</span>
        </a>
    </div>
    <div class="footer-social">
        <a class="footer-social-item" target="_blank" rel="nofollow" href="https://twitter.com/CeFestGlobal">
            <img src="{{asset('assets/icons/twitter.png')}}" alt="">
        </a>
        <a class="footer-social-item" target="_blank" rel="nofollow" href="https://www.instagram.com/cefestglobal/">
            <img src="{{asset('assets/icons/instagram.png')}}" alt="">
        </a>
        <a class="footer-social-item" target="_blank" rel="nofollow"
           href="https://www.linkedin.com/company/cefest-lojistik-bili%C5%9Fim-dan%C4%B1%C5%9Fmanl%C4%B1k-ve-ticaret-limited-%C5%9Firketi/">
            <img src="{{asset('assets/icons/linkedin.png')}}" alt="">
        </a>
    </div>
    <div class="footer-copyright">
        <div class="page-container">
            Copyright &copy; 2021-{{ now()->year }} CeFest Global
        </div>
    </div>
</footer>
