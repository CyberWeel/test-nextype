<?php

set_exception_handler(function ($exception)
{
    echo "Exception: " . $exception->getMessage();
});

class CBase
{
    private static $params;
    private static $instance;

    public static function getInstance($params = false)
    {
        if (is_null(self::$instance))
        {
            self::$instance = new self();
        }

        if (is_array($params))
        {
            self::$params = $params;
        }

        return self::$instance;
    }

    public static function getParam($property)
    {
        if (!is_null(self::$params) && isset(self::$params[$property]))
            return self::$params[$property];

        throw new Exception('Oops, there is no such property!');
    }

}
