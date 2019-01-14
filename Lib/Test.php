<?php

namespace Lib;


class Test {

    protected static $data;

    /**
     * Get the value of data
     */ 
    public static function getData()
    {
        return self::$data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public static function setData($data)
    {
        self::$data = $data;
    }
}