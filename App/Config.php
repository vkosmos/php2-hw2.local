<?php

namespace App;

class Config
{
    protected static $_instance = null;
    protected const CONFIGPATH = __DIR__ . '/config_data.php';
    public $data = [];

    public static function getInstance()
    {
        if (null === self::$_instance){
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    protected function __construct()
    {
        $this->data = require self::CONFIGPATH;
    }

}
