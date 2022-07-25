@extends('web.master.master')

@section('content')
    <div class="swiper">
        <section class="swiper-wrapper">
            <h2>Atualizações</h2>
            <article class="swiper-slide" style="background-image: url({{ url('frontend/images/slider.jpg') }})">
                <div class="swiper-slide-inner">
                    <div>
                        <h3>
                            Eficiência<br>
                            com experiência<br>
                            e seriedade.
                        </h3>
                        <a href="" title="">Saiba mais</a>
                    </div>
                </div>
            </article>
            <article class="swiper-slide" style="background-image: url({{ url('frontend/images/slider.jpg') }})">
                <div class="swiper-slide-inner">
                    <div>
                        <h3>
                            Eficiência<br>
                            com experiência<br>
                            e seriedade.
                        </h3>
                        <a href="" title="">Saiba mais</a>
                    </div>
                </div>
            </article>
            <article class="swiper-slide" style="background-image: url({{ url('frontend/images/slider.jpg') }})">
                <div class="swiper-slide-inner">
                    <div>
                        <h3>
                            Eficiência<br>
                            com experiência<br>
                            e seriedade.
                        </h3>
                        <a href="" title="">Saiba mais</a>
                    </div>
                </div>
            </article>
        </section>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="l-main__services">
        <div class="l-main__inner">
            <div class="l-main__title">
                <span>Nossos principais serviços</span>
                <h2>Defendemos o seu direito de forma humanizada.</h2>
                <a href="" title="Saiba mais">Saiba mais</a>
            </div>
            <div class="l-main__items">
                <a href="" title="Direito Triburário" class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-scale" width="44"
                        height="44" viewbox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="7" y1="20" x2="17" y2="20"></line>
                        <path d="M6 6l6 -1l6 1"></path>
                        <line x1="12" y1="3" x2="12" y2="20"></line>
                        <path d="M9 12l-3 -6l-3 6a3 3 0 0 0 6 0"></path>
                        <path d="M21 12l-3 -6l-3 6a3 3 0 0 0 6 0"></path>
                    </svg>
                    <h3>Direito<br>Triburário</h3>
                </a>
                <a href="" title="Dividas Bancárias" class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="44"
                        height="44" viewbox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18">
                        </path>
                        <line x1="13" y1="8" x2="15" y2="8"></line>
                        <line x1="13" y1="12" x2="15" y2="12"></line>
                    </svg>
                    <h3>Dividas<br>Bancárias</h3>
                </a>
                <a href="" title="Dívidas Empresariais" class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-writing-sign" width="44"
                        height="44" viewbox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M3 19c3.333 -2 5 -4 5 -6c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 2.877 2.5 4c1.5 2 2.5 2.5 3.5 1c.667 -1 1.167 -1.833 1.5 -2.5c1 2.333 2.333 3.5 4 3.5h2.5">
                        </path>
                        <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z"></path>
                        <path d="M16 7h4"></path>
                    </svg>
                    <h3>Dividas<br>Empresariais</h3>
                </a>
                <a href="" title="Dívidas Rurais" class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-warehouse"
                        width="44" height="44" viewbox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21v-13l9 -4l9 4v13"></path>
                        <path d="M13 13h4v8h-10v-6h6"></path>
                        <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3"></path>
                    </svg>
                    <h3>Dívidas<br>Rurais</h3>
                </a>
            </div>
        </div>
    </div>

    <div class="l-main__support">
        <div class="l-main__faq" style="background-image: url({{ url('frontend/images/faq-bg.jpg') }})">
            <div class="pattern"></div>
            <div class="inner">
                <h2>Perguntas frequentes.</h2>
                <div class="faq-section section-hide">
                    <div class="faq-title" onclick="clickAccordion(0)">
                        <h3>Quanto tempo dura uma ação de despejo?</h3>
                        <img src="{{ url(asset('frontend/images/faq-icon.svg')) }}" alt="" title=""
                            class="faq-icon">
                    </div>
                    <p class="hide">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, non cupiditate, necessitatibus magni deserunt voluptas
                        explicabo dolores alias esse officiis ex. Rerum sit eum sed,
                        quia doloremque aliquid dolorum necessitatibus!
                    </p>
                </div>
                <div class="faq-section section-hide">
                    <div class="faq-title" onclick="clickAccordion(1)">
                        <h3>Como faço para me tornar empresário?</h3>
                        <img src="{{ url(asset('frontend/images/faq-icon.svg')) }}" alt="" title=""
                            class="faq-icon">
                    </div>
                    <p class="hide">Conteúdo da seção</p>
                </div>
                <div class="faq-section section-hide">
                    <div class="faq-title" onclick="clickAccordion(2)">
                        <h3>Quanto tempo demora uma processo trabalhista?</h3>
                        <img src="{{ url(asset('frontend/images/faq-icon.svg')) }}" alt="" title=""
                            class="faq-icon">
                    </div>
                    <p class="hide">Conteúdo da seção</p>
                </div>
                <div class="faq-section section-hide">
                    <div class="faq-title" onclick="clickAccordion(3)">
                        <h3>Quais as formas de pagamento?</h3>
                        <img src="{{ url(asset('frontend/images/faq-icon.svg')) }}" alt="" title=""
                            class="faq-icon">
                    </div>
                    <p class="hide">Conteúdo da seção</p>
                </div>
            </div>
        </div>
        <div class="l-main__contact">
            <div class="inner">
                <h2>Fale conosco.</h2>
                <form class="l-main__form" autocomplete="off">
                    <input name="name" id="name" placeholder="Nome completo" type="text">
                    <div class="input-grid">
                        <input name="email" id="email" placeholder="Melhor email" type="text">
                        <input name="phone" id="phone" placeholder="Telefone" type="tel">
                    </div>
                    <textarea name="message" id="message" placeholder="Mensagem"></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="l-main__call_to_contact">
        <div class="inner">
            <div>
                <h4>Atendimento customizado para o seu ramo de negócio!</h4>
            </div>
            <div>
                <a href="" title="Fale conosco">Fale conosco</a>
            </div>
        </div>
    </div>
@endsection
