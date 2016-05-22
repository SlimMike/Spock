<?php

namespace app;

use app\Sign\Sign;

class Turn
{
    /**
     * @var Sign
     */
    private $first;
    /**
     * @var Sign
     */
    private $second;

    /**
     * @param Sign $first
     * @param Sign $second
     */
    public function __construct(Sign $first, Sign $second)
    {
        $this->first  = $first;
        $this->second = $second;
    }

    /**
     * @return Sign
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @return Sign
     */
    public function getSecond()
    {
        return $this->second;
    }
}