<?php

namespace app\Sign;


class Scissors extends Sign
{
    protected $owns = [
        Paper::class,
        Lizard::class
    ];
}