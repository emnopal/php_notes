<?php

    # Fungsi ini mirip dengan attributes di c# dan decorator di Python atau JS dan Annotation di Java

    # membuat class attribute
    #[Attribute] // <inisialisasi atribut, nama Attribute tidak bisa diganti>
    // bisa digunakan di class, function, method, property, class constant dan parameter
    class NotBlank{

    }

    # Attribute target -> membatasi di target tertentu (misal hanya di class, function dsb)
    /*
    Contoh:
    #[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
    class Test{}
    Attribute test hanya bisa di assign ke property dan parameter saja
    */

    #[Attribute(Attribute::TARGET_PROPERTY)]
    class Length{
        public int $min, $max;
        public function __construct($min, $max){
            $this->min = $min;
            $this->max = $max;
        }
    }

    class LoginRequests{

        #[Length(min:4, max:16)]
        #[NotBlank]
        public ?string $username; # ? => nullable, either string or null

        #[Length(min:8, max:16)]
        #[NotBlank]
        public ?string $password; # ? => nullable, either string or null
    }

    function validateNotBlank(ReflectionProperty $prop, object $object){

        $attribute = $prop->getAttributes(NotBlank::class); // digunakan untuk mendapatkan attribute NotBlank

        if (count($attribute) > 0){ # kalo ada di cek dulu
            if (!$prop->isInitialized($object)) # kalo seandainya prop belum di initialize
                #throw new Exception("Property $prop->name from: " .get_class($object) ." is null");
                throw new Exception("Property $prop->name from: " .$object::class ." is null"); # fitur baru php 8 buat get class name
            if ($prop->getValue($object) == null) # atau kalo kita get value $object ada null nya
                #throw new Exception("Property $prop->name from: " .get_class($object) ." is null");
                throw new Exception("Property $prop->name from: " .$object::class ." is null"); # fitur baru php 8 buat get class name
        }

    }

    function validateLength(ReflectionProperty $prop, object $object){

        if (!$prop->isInitialized($object) || $prop->getValue($object) == null) # kalo seandainya prop belum di initialize dan prop null
            return;

        $value = $prop->getValue($object); // get value dari object
        $attribute = $prop->getAttributes(Length::class); // digunakan untuk mendapatkan attribute Length

        foreach($attribute as $att){
            $length = $att->newInstance(); # membuat object dari attribute yang sudah di definisikan pada Attribute length yang ada pada properti di class LoginRequest
            if (strlen($value) < $length->min)
                #throw new Exception(
                #    "Property $prop->name from: " .get_class($object)
                #    ." is too short, expected $length->min, found " .strlen($value) ."! "
                #);
                throw new Exception(
                    "Property $prop->name from: " .$object::class # fitur baru php 8 buat get class name
                    ." is too short, expected $length->min, found " .strlen($value) ."! "
                );
            if (strlen($value) > $length->max)
                #throw new Exception(
                #    "Property $prop->name from: " .get_class($object)
                #    ." is too short, expected $length->max, found " .strlen($value) ."! "
                #);
                throw new Exception(
                    "Property $prop->name from: " .$object::class # fitur baru php 8 buat get class name
                    ." is too short, expected $length->max, found " .strlen($value) ."! "
                );
            else
                #echo "$prop->name from: " .get_class($object) ." class is OK!" .PHP_EOL;
                echo "$prop->name from: " .$object::class ." class is OK!" .PHP_EOL; # fitur baru php 8 buat get class name
        }

    }

    function validate(object $object){
        $class = new ReflectionClass($object); #return array
        $properties = $class->getProperties();
        foreach($properties as $prop){
            validateNotBlank($prop, $object);
            validateLength($prop, $object);
        }
    }

    # coba lakukan requests
    $requests = new LoginRequests();
    $requests->username = "test";
    $requests->password = "test123456";
    try{
        validate($requests); # aman
    } catch (Exception $e){
        echo $e;
    }

    echo PHP_EOL;

    $requests = new LoginRequests();
    $requests->username = "test";
    $requests->password = "test123";
    try{
        validate($requests); # password lebih kecil dari 8
    } catch (Exception $e){
        echo $e;
    }

    echo PHP_EOL;
    echo PHP_EOL;

    $requests = new LoginRequests();
    $requests->username = "test";
    $requests->password = null;
    try{
        validate($requests); # error karena password null
    } catch (Exception $e){
        echo $e;
    }

    echo PHP_EOL;
    echo PHP_EOL;

    $requests = new LoginRequests();
    try{
        validate($requests); # bakalan error karena belum di inisialisasi
    } catch (Exception $e){
        echo $e;
    }

    echo PHP_EOL;
    echo PHP_EOL;

    $requests = new LoginRequests();
    $requests->username = "usernameinisangatpanjangsekalisehinggasayapusing";
    $requests->password = "passwordinisangatpanjangsekalisehinggasayapusing";
    try{
        validate($requests); # error karena password null
    } catch (Exception $e){
        echo $e;
    }


