<?php

namespace app\Sign;


class Paper extends Sign
{
    protected $owns = [
        Spock::class,
        Rock::class
    ];
}