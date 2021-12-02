<?php

    /*
        Namespaces are qualifiers that solve two different problems:

        -   They allow for better organization by grouping classes
            that work together to perform a task
        -   They allow the same name to be used
            for more than one class

        For example, you may have a set of classes which describe an
        HTML table, such as Table, Row and Cell while also having
        another set of classes to describe furniture,
        such as Table, Chair and Bed.
        Namespaces can be used to organize the classes
        into two different groups while also preventing
        the two classes Table and Table from being mixed up.

        Note: A namespace declaration must be the first thing in the
        PHP file. The following code would be invalid:

        echo "Hello World!";
        namespace MyProject; // this is invalid

        // use namespaces
            namespace MyProject;

        // declare namespace inside namespace:
            namespace MyProject\OtherProject;

        // using namespace:
            use MyProject\OtherProject;
            $obj = new OtherProject\Table();
            $obj = new namespace\other_namespace\class_name();

        // using namespace alias:
            use MyProject\OtherProject as OtherProjectAlias;
            $obj = new OtherProjectAlias\Table();

        // calling other file:
            include 'other_file.php'; // include statement may still pass
                                      // and jump to the next step in the execution
            require 'other_file.php'; // require the process exits with a fatal error
                                      // if the file can’t be included.

        example of namespace:
            file1.php:
            <?php namespace foo;
            class Cat {
                static function says() {echo 'meoow';}  } ?>

            file2:
            <?php namespace bar;
            class Dog {
                static function says() {echo 'ruff';}  } ?>

            file3:
            <?php namespace animate;
            class Animal {
                static function breathes() {echo 'air';}  } ?>

            file4:
            <?php namespace fub;
                // call other php file
                include 'file1.php';
                include 'file2.php';
                include 'file3.php';
                use foo as feline; // with alias
                use bar as canine; // with alias
                use animate; // without alias
                echo feline\Cat::says(), "<br />\n";
                echo canine\Dog::says(), "<br />\n";
                echo animate\Animal::breathes(), "<br />\n";  ?>
    */
