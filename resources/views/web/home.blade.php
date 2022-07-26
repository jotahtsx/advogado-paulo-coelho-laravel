@extends('web.master.master')

@section('content')
    <div class="swiper">
        <section class="swiper-wrapper">
            <h2>Atualizações</h2>
            @if ($sliders->count())
                @foreach ($sliders as $slider)
                    <article class="swiper-slide" style="background: url({{ Storage::url($slider->cover) }})">
                        <div class="swiper-slide-inner">
                            <div>
                                {!! $slider->content !!}
                                <a href="{{ route('web.about') }}" title="Saiba mais">Saiba mais</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            @endif
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
                <a href="{{ route('web.about') }}" title="Saiba mais">Saiba mais</a>
            </div>
            <div class="l-main__items-wrapper">
                <div class="l-main__items">
                    <a href="https://wa.link/r5k09c" target="_blank" title="Direito Imobiliário" class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-scale" width="44"
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="7" y1="20" x2="17" y2="20" />
                            <path d="M6 6l6 -1l6 1" />
                            <line x1="12" y1="3" x2="12" y2="20" />
                            <path d="M9 12l-3 -6l-3 6a3 3 0 0 0 6 0" />
                            <path d="M21 12l-3 -6l-3 6a3 3 0 0 0 6 0" />
                        </svg>
                        <h3>Direito<br />Imobiliário</h3>
                    </a>
                    <a href="https://wa.link/r5k09c" target="_blank" title="Dividas Bancárias" class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="44"
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                            <line x1="13" y1="8" x2="15" y2="8" />
                            <line x1="13" y1="12" x2="15" y2="12" />
                        </svg>
                        <h3>Dívidas<br />Bancárias</h3>
                    </a>
                </div>
                <div class="l-main__items-3">
                    <a href="https://wa.link/r5k09c" target="_blank" title="Direito Tributário" class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-writing-sign"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M3 19c3.333 -2 5 -4 5 -6c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 2.877 2.5 4c1.5 2 2.5 2.5 3.5 1c.667 -1 1.167 -1.833 1.5 -2.5c1 2.333 2.333 3.5 4 3.5h2.5" />
                            <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z" />
                            <path d="M16 7h4" />
                        </svg>
                        <h3>Direito<br />Tributário</h3>
                    </a>
                    <a href="https://wa.link/r5k09c" target="_blank" title="Direito Trabalhista" class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-warehouse"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 21v-13l9 -4l9 4v13" />
                            <path d="M13 13h4v8h-10v-6h6" />
                            <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" />
                        </svg>
                        <h3>Direito<br />Trabalhista</h3>
                    </a>
                    <a href="https://wa.link/r5k09c" target="_blank" title="Direito Empresarial" class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-briefcase"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="3" y="7" width="18" height="13" rx="2"></rect>
                            <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="12" y1="12" x2="12" y2="12.01"></line>
                            <path d="M3 13a20 20 0 0 0 18 0"></path>
                        </svg>
                        <h3>Direito<br />Empresarial</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="l-main__support">
        <div class="l-main__faq" style="background-image: url({{ url('frontend/images/faq-bg.jpg') }})">
            <div class="pattern"></div>
            <div class="inner">
                <h2>Perguntas frequentes.</h2>
                @if ($questions->count())
                    @foreach ($questions as $question)
                        <div class="faq-section section-hide">
                            <div class="faq-title" onclick="clickAccordion(0)">
                                <h3>{{ $question->title }}</h3>
                                <img src="{{ url(asset('frontend/images/faq-icon.svg')) }}" alt="{{ $question->title }}"
                                    title="{{ $question->title }}" class="faq-icon">
                            </div>
                            <p class="hide">
                                {!! $question->content !!}
                            </p>
                        </div>
                    @endforeach
                @endif
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
