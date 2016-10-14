<?php

class ReflectionParameter implements Reflector
{
   final private __clone()
   public object __construct(string name)
   public string __toString()

   public bool allowsNull()

   public static string export()

   public ReflectionClass getClass()
   public mixed getDefaultValue() # introduced in PHP 5.1.0
   public string getName()

   public bool isDefaultValueAvailable() # introduced in PHP 5.1.0
   public bool isOptional() # introduced in PHP 5.1.0
   public bool isPassedByReference()

} 

$method = new ReflectionMethod("corporatedrone", "setTieColor");
   $parameters = $method->getParameters();
   foreach ($parameters as $parameter) echo $parameter->getName()."<br />";


?>