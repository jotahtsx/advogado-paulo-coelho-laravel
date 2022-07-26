<?php

namespace PauloCoelho\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use PauloCoelho\Support\Message;
use PauloCoelho\Support\Seo;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $message;
    protected $seo;

    public function __construct()
    {
        $this->message = new Message();
        $this->seo = new Seo;
    }
}
