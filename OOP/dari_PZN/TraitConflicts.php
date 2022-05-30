<?php

trait A{
    function doA(): void{
        echo "a" . PHP_EOL;
    }
    function doB(): void{
        echo "b" . PHP_EOL;
    }
}

trait B{
    function doA(): void{
        echo "A" . PHP_EOL;
    }
    function doB(): void{
        echo "B" . PHP_EOL;
    }
}

class Sample{

    // use A, B;
    // Fatal error: Trait method B::doA
    // has not been applied as Sample::doA,
    // because of collision with A::doA

    // Solution
    use A, B {
        // selecting one of the method
        A::doA insteadof B; // doA will be called from trait A instead of trait B
        B::doB insteadof A; // doB will be called from trait B instead of trait A

        // using alias to call the method doA from trait B, and doB from trait A
        B::doA as doA2; // doA will be called from trait B without conflicts with alias doA2
        A::doB as doB2; // doB will be called from trait A without conflicts with alias doB2
    }

}

$sample = new Sample();
$sample->doA();
$sample->doB();

// calling conflict traits with alias
$sample->doA2();
$sample->doB2();