<?php

namespace app\Sign;


class Rock extends Sign
{
    protected $owns = [
        Scissors::class,
        Lizard::class
    ];
}