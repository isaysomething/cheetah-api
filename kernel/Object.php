<?php
namespace cheetah\kernel;

class Object
{
    /**
     * @return mixed the fully qualified name of this class.
     */
    public static function className()
    {
        return get_called_class();
    }

    /**
     * Object constructor.
     */
    public function __construct($config = [])
    {
        if (!empty($config)) {
            \Cheetah::configure($this, $config);
        }
        $this->init();
    }

    public function init()
    {
    }

    public function __get($name)
    {
        $getter = 'get' . ucfirst($name);
        if (method_exists($this, $getter)) {
            $this->$getter();
        } else {
            $setter = 'set' . ucfirst($name);
            if (method_exists($this, $setter)) {
                throw new Exception("");
            } else {
                throw new Exception("");
            }
        }
    }

    public function __set($name, $value)
    {
    }
}