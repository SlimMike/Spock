<?php

namespace app\Sign;


class Spock extends Sign
{
    protected $owns = [
        Scissors::class,
        Rock::class
    ];
}