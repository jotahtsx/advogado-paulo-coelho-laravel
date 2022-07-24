<?php

namespace PauloCoelho\Support;

use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    private $optimizer;

    public function __construct()
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            env('APP_NAME'),
            'pt-BR',
            'article'
        )->twitterCard(
            env('CLIENT_SOCIAL_TWITTER_CREATOR'),
            env('CLIENT_SOCIAL_TWITTER_PUBLISHER'),
            env('APP_URL'),
        )->publisher(
            env('CLIENT_SOCIAL_FACEBOOK_PAGE'),
            env('CLIENT_SOCIAL_FACEBOOK_AUTHOR')
        )->facebook(
            env('CLIENT_SOCIAL_FACEBOOK_PAGE')
        );
    }

    public function render($title, $description, $url, $image, bool $follow = true)
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $follow)->render();
    }
}
