<?php

class ReflectionClass implements Reflector
{
   final private __clone()
   public object __construct(string name)
   public string __toString()

   public static string export()

   public mixed getConstant(string name)
   public array getConstants()
   public ReflectionMethod getConstructor()
   public array getDefaultProperties()
   public string getDocComment()
   public int getEndLine()
   public string getExtensionName()
   public string getFileName()
   public ReflectionClass[] getInterfaces()
   public ReflectionMethod[] getMethods()
   public ReflectionMethod getMethod(string name)
   public int getModifiers()
   public string getName()
   public ReflectionClass getParentClass()
   public ReflectionProperty[] getProperties()
   public ReflectionProperty getProperty(string name)
   public int getStartLine()
   public array getStaticProperties()

   # The following three methods were introduced in PHP 5.1

   public bool hasConstant(string name)
   public bool hasMethod(string name)
   public bool hasProperty(string name)

   public bool implementsInterface(string name)

   public bool isAbstract()
   public bool isFinal()
   public bool isInstance(stdclass object)
   public bool isInstantiable()
   public bool isInterface()
   public bool isInternal()
   public bool isSubclassOf(ReflectionClass class)
   public bool isIterateable()
   public bool isUserDefined()

   public stdclass newInstance(mixed* args)

   public ReflectionExtension getExtension()

}

  $class = new ReflectionClass("corporatedrone");

   # Retrieve and output class methods
   $methods = $class->getMethods();

   echo "Class methods: <br />";

   foreach($methods as $method)
      echo $method->getName()."<br />";

   # Is the class abstract or final?
   $isAbstract = $class->isAbstract() ? "Yes" : "No";
   $isFinal = $class->isFinal() ? "Yes" : "No";

   echo "<br />";
   echo "Is class ".$class->getName()." Abstract: ".$isAbstract."<br />";
   echo "Is class ".$class->getName()." Final: ".$isFinal."<br />";


?>