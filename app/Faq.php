<?php

namespace PauloCoelho;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];
}
