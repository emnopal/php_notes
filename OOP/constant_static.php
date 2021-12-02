<?php

    // scope resolution operator (::) to access constants or access static properties and methods
    // when use :: operator, don't need to initialize the class
    // note: const cannot be changed
    // to initialize static function or property, use self::
    // cannot use static method or property outside of the class

    class PersonDocumentation{
        const DOCS = "This is class to create Person Objects!";
        public static $isPerson = "Person is a class that defines a person!";
        public function purposed_person_class(){
            return self::DOCS; // accessing constant inside the class
        }
        public static function whatIsPerson(){
            return self::$isPerson; // accessing static property inside the class
        }
        public static function classPurposed(){
            return "To create person objects based from name, address, age and id";
        }
    }

    class MethodInPerson extends PersonDocumentation{
        public static function id_purposed(){
            return "To create id of persons";
        }
        public static function name_purposed(){
            return "To initialize name of person";
        }
        public static function address_purposed(){
            return "To initialize address of person";
        }
        public static function age_purposed(){
            return "To initialize age of person";
        }
        public static function all_purposed(){
            $strings = PersonDocumentation::DOCS .". " . PHP_EOL
                        .PersonDocumentation::$isPerson .". " .PHP_EOL
                        ."Class purposed is: " .PersonDocumentation::classPurposed() .PHP_EOL
                        ."ID is: " .self::id_purposed() .PHP_EOL
                        ."Name is: " .self::name_purposed() .PHP_EOL
                        ."Address is: " .self::address_purposed() .PHP_EOL
                        ."Age is: " .self::age_purposed() .PHP_EOL;
            return $strings;
        }
    }

    // accessing constant
    echo PersonDocumentation::DOCS .PHP_EOL; // This is class to create Person Objects!

    $person_docs = new PersonDocumentation();
    echo $person_docs->purposed_person_class() .PHP_EOL; // This is class to create Person Objects!

    // accessing static method
    // first way
    $person_docs = new PersonDocumentation();
    echo $person_docs->whatIsPerson() .PHP_EOL; // Person is a class that defines a person!

    // second way and more efficient way
    echo PersonDocumentation::whatIsPerson() .PHP_EOL; // Person is a class that defines a person!

    echo PersonDocumentation::classPurposed() .PHP_EOL; // to create person objects based from name, address, age and id

    // accessing static property
    echo PersonDocumentation::$isPerson .PHP_EOL; // Person is a class that defines a person!

    // accessing static method and property from parent class and child class
    echo PHP_EOL .MethodInPerson::all_purposed(); // This is class to create Person Objects!


    echo PHP_EOL . "Another Example" . PHP_EOL;

    class domain {
        protected static function getWebsiteName() {
            return "W3Schools.com";
        }
    }
    class domainW3 extends domain {
        public $websiteName;
        public function __construct() {
            $this->websiteName = parent::getWebsiteName();
        }
    }

    $domainW3 = new domainW3;
    echo $domainW3 -> websiteName;

