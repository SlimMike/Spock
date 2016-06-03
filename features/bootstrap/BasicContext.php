<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

/**
 * Defines application features from the specific context.
 */
class BasicContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @param string  $className
     * @param Closure $closure
     */
    protected function exceptionWillBeThrown($className, Closure $closure)
    {
        try {
            $closure();
        } catch (Exception $e) {
            if (!is_a($e, $className)) {
                $exceptionClass = get_class($e);
                throw new RuntimeException("Expected exception of class {$className}, got {$exceptionClass} instead");
            }

            return;
        }

        throw new RuntimeException("Expected exception of class {$className}");
    }
}
