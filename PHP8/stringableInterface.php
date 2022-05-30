<?php

# konversi dari object ke string, atau kalau mau print object karena kalo tanpa stringable bakalan error
# mirip kaya dunder __str__() di python

function sayHello(Stringable $stringable): void
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class PersonStringable
{

    public function __toString(): string
    {
        return "Person";
    }

}

sayHello(new PersonStringable());