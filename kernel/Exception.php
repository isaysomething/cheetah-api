<?php
namespace cheetah\kernel;


class Exception extends \Exception
{
    /**
     * @return string the name of this Exception
     */
    public function getName()
    {
        return 'Exception';
    }
}