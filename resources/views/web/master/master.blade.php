<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    {!! $head ?? '' !!}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url(asset('frontend/css/style.css'))}}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:wght@100;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/images/site.webmanifest') }}">
    <style>
        :where(body, iframe, pre, img, svg, video, canvas, select) {
            max-width: 100%;
            word-break: break-word;
            overflow: auto;
        }
    </style>
  </head>

  <body>
    <header class="l-header">
      <div class="l-header__topbar">
        <div class="topbar-inner">
          <div class="topbar-email">
            <a class="topbar-email-link" href="mailto:atendimento@paulocoelho.com.br" title="atendimento@paulocoelho.com.br">
              <img src="{{url(asset('frontend/images/email-icon.svg'))}}" alt="atendimento@paulocoelho.com.br" title="atendimento@paulocoelho.com.br">
              <span>atendimento@paulocoelho.com.br</span>
            </a>
          </div>
          <div class="topbar-appointment">
            <a class="topbar-appointment-link" href="">Faça seu orçamento</a>
          </div>
        </div>
      </div>
      <div class="l-header__navbar">
        <div class="navbar-inner">
          <div class="navbar-inner-logo">
            <a href="{{route('web.home')}}" title="Advogado Paulo Coelho">
              <img src="{{url(asset('frontend/images/logo.svg'))}}" alt="Advogado
              Paulo Coelho" title="Advogado Paulo Coelho">
            </a>
          </div>
          <nav class="navbar-inner-nav-mobile">
            <button type="button" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="menu-mobile" aria-expanded="false" class="btn-menu">
              Menu
              <span class="hamburger"></span>
            </button>
            <ul class="menu-mobile" id="menu-mobile">
              <li>
                <a href="{{route('web.home')}}" title="Home">Home</a>
              </li>
              <li>
                <a href="{{route('web.about')}}" title="Sobre">Sobre</a>
              </li>
              <li>
                <a href="#services" title="Áreas">Áreas</a>
              </li>
              <li>
                <a href="" title="Contato">Contato</a>
              </li>
            </ul>
          </nav>
          <nav class="navbar-inner-nav">
            <a href="{{route('web.home')}}" class="{{isActive('web.home')}}">Home</a>
            <a href="{{route('web.about')}}" class="{{isActive('web.about')}}" title="Sobre">Sobre</a>
            <a href="" title="">Áreas</a>
            <a href="" title="">Artigos</a>
            <a href="{{route('web.contact')}}" class="{{isActive('web.contact')}}" title="Contato">Contato</a>
          </nav>
          <nav class="navbar-inner-social">
            <a class="navbar-inner-social-icon" href="" title="Facebook">
              <img src="{{url(asset('frontend/images/facebook-icon.svg'))}}" alt="" title="">
            </a>
            <a class="navbar-inner-social-icon" href="" title="Instagram">
              <img src="{{url(asset('frontend/images/instagram-icon.svg'))}}" alt="" title="">
            </a>
            <a class="navbar-inner-social-icon" href="" title="WhatsApp">
              <img src="{{url(asset('frontend/images/whatsapp-icon.svg'))}}" alt="" title="">
            </a>
          </nav>
        </div>
      </div>
    </header>

    <main class="l-main">
        @yield('content')
    </main>

    <footer class="l-footer">
      <div class="inner">
        <div class="footer-data">
          <a href="./" title="Advogado Paulo Coelho">
            <img src="{{url(asset('frontend/images/logo.svg'))}}" alt="Advogado
              Paulo Coelho" title="Advogado Paulo Coelho">
          </a>
          <p>Advogado Paulo Coelho</p>
          <span>OAB/PI 14.627</span>
        </div>
        <div class="footer-links">
          <h3>Serviços</h3>
          <ul>
            <li>
              <a href="" title="">Direito tributário</a>
            </li>
            <li>
              <a href="" title="">Direito bancárias</a>
            </li>
            <li>
              <a href="" title="">Direito empresariáis</a>
            </li>
            <li>
              <a href="" title="">Direito rurais</a>
            </li>
          </ul>
        </div>
        <div class="footer-links">
          <h3>Informações de contato</h3>
          <ul>
            <li>
              <a href="" title="">55 86 98883-8097</a>
            </li>
            <li>
              <a href="" title="">atendimento@paulocoelho.com.br</a>
            </li>
          </ul>
        </div>
        <nav class="footer-social">
          <a class="footer-social-icon" href="" title="Facebook">
            <img src="{{url(asset('frontend/images/facebook-icon.svg'))}}" alt="" title="" class="icon">
          </a>
          <a class="footer-social-icon" href="" title="Instagram">
            <img src="{{url(asset('frontend/images/instagram-icon.svg'))}}" alt="" title="" class="icon">
          </a>
          <a class="footer-social-icon" href="" title="WhatsApp">
            <img src="{{url(asset('frontend/images/whatsapp-icon.svg'))}}" alt="" title="" class="icon">
          </a>
        </nav>
      </div>
    </footer>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{url(asset('frontend/js/app.js'))}}" defer=""></script>
    <script>function clickAccordion(t) {
    var parent = document.getElementsByClassName('faq-title')[t].parentElement;
    var img = document.getElementsByClassName('faq-icon');
    var content = parent.classList.contains('section-hide');
    var sessions = document.getElementsByClassName('faq-section');
    if (content == true) {
        for(var s = 0; s < sessions.length; s++){
            sessions[s].classList = 'faq-section section-hide';
            img[s].style.transform = 'rotate(0deg)';
        }
        parent.className = 'faq-section section-show';
        img[t].style.transform = 'rotate(90deg)';
    } else {
        parent.classList = 'faq-section section-hide';
        img[t].style.transform = 'rotate(0deg)';
    }
}
const nav = document.querySelector('.navbar-inner-nav-mobile');
const btnMenu = document.querySelector('.btn-menu');
const menu = document.querySelector('.menu-mobile');
function handleButtonClick(event) {
    if (event.type === 'touchstart') event.preventDefault();
    event.stopPropagation();
    nav.classList.toggle('active');
    handleClickOutside(menu, ()=>{
        nav.classList.remove('active');
        setAria();
    });
    setAria();
}
function handleClickOutside(targetElement, callback) {
    const html = document.documentElement;
    function handleHTMLClick(event) {
        if (!targetElement.contains(event.target)) {
            targetElement.removeAttribute('data-target');
            html.removeEventListener('click', handleHTMLClick);
            html.removeEventListener('touchstart', handleHTMLClick);
            callback();
        }
    }
    if (!targetElement.hasAttribute('data-target')) {
        html.addEventListener('click', handleHTMLClick);
        html.addEventListener('touchstart', handleHTMLClick);
        targetElement.setAttribute('data-target', '');
    }
}
function setAria() {
    const isActive = nav.classList.contains('active');
    btnMenu.setAttribute('aria-expanded', isActive);
    if (isActive) btnMenu.setAttribute('aria-label', 'Fechar Menu');
    else btnMenu.setAttribute('aria-label', 'Abrir Menu');
}
btnMenu.addEventListener('click', handleButtonClick);
btnMenu.addEventListener('touchstart', handleButtonClick);

</script>
  </body>
</html>
