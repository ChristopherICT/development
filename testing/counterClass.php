
<?php

class Counter {
    private static $_count = 0;

    public function __construct() {
        self::$_count++;
    }

    public static function getCount() {
        return self::$_count;
    }
}

echo Counter::getCount(). '<br />';

$x = new Counter;
echo Counter::getCount(). '<br />';

$y = new Counter;
echo Counter::getCount(). '<br />';

$z = new Counter;
echo Counter::getCount(). '<br />';