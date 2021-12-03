<?php

interface isAnonymousClass{ // interface gak harus di implement, sedangkan abstract class harus di implement
    function say(): void;
}

// One Argument
$Anonymous = new class("CallMyNameSingle", 12) implements isAnonymousClass{
    public string $strSay;
    public function __construct(string $strSay){
        $this->strSay = $strSay;
    }
    public function say(): void{
        echo "Hello from Anonymous Class with message: $this->strSay" . PHP_EOL;
    }
};

// $Anonymous("Hellos") -> say(); // Anonymous Class not callable
// $test = $Anonymous("Hellos"); echo $test; // Anonymous Class not callable

// solutions!
$Anonymous -> say(); // Hello from Anonymous Class with message: CallMyName


// Multiple Arguments
$Anonymous = new class("CallMyNameForLoop", 12) implements isAnonymousClass{
    public string $strSay;
    public function __construct(string $strSay, int $intForLoop){
        $this->strSay = $strSay;
        $this->intForLoop = $intForLoop;
    }
    public function say(): void{
        for ($i = 0; $i < $this->intForLoop; $i++){
            echo $i+1 ." " ."Hello from Anonymous Class with message: $this->strSay" . PHP_EOL;
        }
    }
};

// $Anonymous("Hellos") -> say(); // Anonymous Class not callable
// $test = $Anonymous("Hellos"); echo $test; // Anonymous Class not callable

// solutions!
$Anonymous -> say(); // Hello from Anonymous Class with message: CallMyName