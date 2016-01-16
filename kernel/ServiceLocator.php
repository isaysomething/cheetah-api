<?php
namespace cheetah\kernel;

class ServiceLocator extends Object
{
    private $_components = [];

    private $_definitions = [];

    public function getComponents()
    {

    }

    public function setComponents()
    {
    }

    public function get($id)
    {
        if (isset($this->_components[$id])) {
            return $this->_components[$id];
        }

        if (isset($this->_definitions[$id])) {
            $definition = $this->_definitions[$id];
            if (is_object($definition) && !$definition instanceof Closure) {
                return $this->_components[$id] = $definition;
            } else {
                return $this->_components[$id] = Yii::createObject($definition);
            }
        }
        throw new \Exception("Unknown component ID: $id");
    }

    public function set($id, $definition)
    {
    }

    public function clear($id)
    {
        unset($this->_components[$id], $this->_definitions[$id]);
    }

    public function has($id, $checkInstance = false)
    {
        return $checkInstance ? isset($this->_components[$id]) : isset($this->_definitions[$id]);
    }
}