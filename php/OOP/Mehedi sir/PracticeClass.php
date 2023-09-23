<?php
    class PracticeClass {
        public static $name;
        public $class_name;
        private $birthday;
        protected $property2;

        public function __construct($input)
        {
            self::$name = $input; 
        }
        public function __destruct()
        {
            print self::$name;
        }
        public static function callName($input) 
        {
            self::$name = $input;
        }
        
        public function getClassName()
        {
            if  (isset($this)){
                return $this->class_name = get_class($this);
            }
        }
        public function setter($input)
        {
            $this->birthday = $input;
        }
        public function getter()
        {
            return $this->birthday;
        }
       
    }
    $object = new PracticeClass('Hello world');
    // $object->callName('Hello World');
    // echo $object->name.PHP_EOL;
    // $object->getClassName();
    // echo $object->class_name.PHP_EOL;
    
    // $object->setter('1999-08-07');

    // echo $object->getter();
    // PracticeClass::callName("M.ferdawus");
    // echo PracticeClass::$name;

?>
