<?php

namespace app\Sign;


abstract class Sign
{
    /**
     * @var array
     */
    protected $owns = [];

    /**
     * @param Sign $otherSign
     *
     * @return bool
     */
    public function isOwning(Sign $otherSign)
    {
        return in_array(get_class($otherSign), $this->owns);
    }
}