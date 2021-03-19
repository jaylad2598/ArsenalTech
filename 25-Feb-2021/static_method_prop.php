
<?php
    class Demo
    {
        public static $var = "Welcome tooooo ArsenalTech";
        public static $var1 = "Good Morning";

        public static function data()
        {
            echo self::$var1;
        }
    }
    class Extra extends Demo
    {
        public static function show()
        {
            echo parent::$var;
        }
    }

    Demo::data();
    $a = new Extra();
    $a->show();

?>
