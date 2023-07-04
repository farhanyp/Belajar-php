<?php

function validate (object $object): void{
    $class = new ReflectionClass($object);
    $properties = $class->getAttributes();
    foreach ($properties as $property){
        validationNotBlank($property, $object);
    }
}

function validationNotBlank(ReflectionProperty $property, object $object): void{
    $attributes = $property->getAttributes(NotBlank::class);
    if(count($attributes)>0){
        if(!$property->isInitialized($object)){
            throw new Exception("Property $property->name is null");
        }
    }
}

