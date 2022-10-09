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
        <a class="footer-contact-item" href="tel:+905236521214">
            <i class="lni lni-phone"></i>
            <span>523 652 12 14</span>
        </a>
        <a class="footer-contact-item" href="mailto:ferhat@cefestglobal.com">
            <i class="lni lni-envelope"></i>
            <span>ferhat@cefestglobal.com</span>
        </a>
        <a class="footer-contact-item" href="mailto:info@cefestglobal.com">
            <i class="lni lni-envelope"></i>
            <span>info@cefestglobal.com</span>
        </a>
    </div>
    <div class="footer-social">
        <a class="footer-social-item" href="#">
            <img src="{{asset('assets/icons/twitter.png')}}" alt="">
        </a>
        <a class="footer-social-item" href="#">
            <img src="{{asset('assets/icons/instagram.png')}}" alt="">
        </a>
        <a class="footer-social-item" href="#">
            <img src="{{asset('assets/icons/linkedin.png')}}" alt="">
        </a>
    </div>
    <div class="footer-copyright">
        <div class="page-container">
            Copyright &copy; 2021-{{ now()->year }} CeFest Global
        </div>
    </div>
</footer>
