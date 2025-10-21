<?php
// static method and property example
class myClass
{
    public static $staticProperty = "I am a static Property.";

    public static function staticMethod()
    {
        return "I am a static method.";
    }
}

echo myClass::staticMethod() . "\n";
echo myClass::$staticProperty . "\n";




?>