<?php

namespace app\Sign;


class Lizard extends Sign
{
    protected $owns = [
        Spock::class,
        Paper::class
    ];
}