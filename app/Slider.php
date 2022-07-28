<?php

namespace PauloCoelho;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
use LaraDev\Support\Cropper;

class Slider extends Model
{
    protected $fillable = [
        'cover',
        'title',
        'content'
    ];
}
