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
            'Paulo Coelho Advogado - Home',
            'pt_BR',
            'article'
        )->twitterCard(
            "teste",
            "teste",
            "teste",
        )->publisher(
            "teste",
            "teste"
        )->facebook(
            "teste"
        );
    }

    public function render(string $title, string $description, string $url, string $image, bool $follow = true)
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $follow)->render();
    }
}
