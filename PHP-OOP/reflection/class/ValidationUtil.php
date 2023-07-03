<?php

class ValidationUtil{

    static function validateLoginRequest(LoginRequest $request){

        if(!isset($request->username)){
            throw new ValidationException("Username is Null");
        }else if(!isset($request->password)){
            throw new ValidationException("Password is Null");
        }else if(trim($request->username == "")){
            throw new Exception("Username is empty");
        }else if(trim($request->password == "")){
            throw new Exception("Password is empty");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}