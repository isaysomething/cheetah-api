<?php
namespace cheetah\web;

use cheetah\kernel\ServiceLocator;

class Application extends ServiceLocator
{
    /**
     * @var string the application name.
     */
    public $name = 'Cheetah Application';

    /**
     * @var string the version of this application.
     */
    public $version = '1.0';

    /**
     * @var string the charset currently used for the application.
     */
    public $charset = 'UTF-8';

    /**
     * @var string the language that is meant to be used fore the end users.
     */
    public $language = 'en';

    /**
     * @var Controller the currently active controller instance
     */
    public $controller;

    /**
     * @var array custom parameters (name => value).
     */
    public $params = [];

    public function init()
    {
    }

    public function run()
    {
    }

    public function getRequest()
    {

    }

    public function handleRequest()
    {
    }
}