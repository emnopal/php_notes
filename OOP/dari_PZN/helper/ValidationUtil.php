<?php

/*
isset()
Determine if a variable is considered set, this means
if a variable is declared and is different than null.
If a variable has been unset with the unset() function,
it is no longer considered to be set. isset() will return
false when checking a variable that has been assigned to null.
Also note that a null character ("\0") is not equivalent to the PHP null constant.

If multiple parameters are supplied then isset() will return
true only if all of the parameters are considered set.
Evaluation goes from left to right and stops as soon as an unset variable is encountered.
*/

class ValidationUtil{
    static function validate(LoginRequest $request){
        if (!isset($request->username)) { // either username not set or username is null
            throw new ValidationException("username is not set");
        } else if (!isset($request->password)) {
            throw new ValidationException("password is not set");
        } else if (is_null($request->username)) {
            throw new ValidationException("username is null");
        } else if (is_null($request->password)) {
            throw new ValidationException("password is null");
        }
    }

    static function validateReflection($request){
        $reflection = new ReflectionClass($request); // The ReflectionClass class reports information about a class.
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC); // get public properties of class
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) { // isInitialized() checks if a property is initialized, !$property->isInitialized() checks if a property is not initialized
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) { // isnull checking for getValue() if value is null will raise exception
                throw new ValidationException("$property->name is null");
            }
        }
    }
}