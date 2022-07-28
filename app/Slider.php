<?php

namespace PauloCoelho;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'cover',
        'title',
        'content'
    ];
}
