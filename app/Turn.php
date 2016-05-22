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
     * @return bool
     */
    public function isDraw()
    {
        return !$this->isFirstSignOwningSecond()
        && !$this->isSecondSignOwningFirst();
    }

    /**
     * @return bool
     */
    public function isFirstSignOwningSecond()
    {
        return $this->first->isOwning($this->second);
    }

    /**
     * @return bool
     */
    public function isSecondSignOwningFirst()
    {
        return $this->second->isOwning($this->first);
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