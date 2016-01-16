<?php
defined('CHEETAH_DEBUG') or define('CHEETAH_DEBUG', false);

class Cheetah
{
    /**
     * @var array class map used by the Cheetah autoloading mechanism.
     * The array keys are the class namespaces.
     * The array values are the corresponding class file paths.
     * @see autoload()
     */
    public static $classMap = [];

    public static $aliases;
    public static $app;
    public static $container;
    public static $log;

    /**
     * @param $object object instance
     * @param array $params the properties config of the object. Such as ['propertyName'=>'propertyValue'].
     */
    public static function configure($object, Array $params)
    {
        foreach ($params as $key => $value) {
            $object->$key = $value;
        }
    }

    public static function autoload($className)
    {
    }
}