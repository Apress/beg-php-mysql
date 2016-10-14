<?php

class ReflectionMethod extends ReflectionFunction
{
   public __construct(mixed class, string name)
   public string __toString()

   public static string export()

   public int getModifiers()
   public ReflectionClass getDeclaringClass()

   public mixed invoke(stdclass object, mixed* args)
   public moxed invokeArgs(stdclass object, array args)

   public bool isAbstract()
   public bool isConstructor()
   public bool isDestructor()
   public bool isFinal()
   public bool isPrivate()
   public bool isProtected()
   public bool isPublic()
   public bool isStatic()

   # ReflectionMethod inherits from ReflectionFunction
   # (not covered in this book), therefore the following methods
   # are made available to it.

   final private __clone()

   public string getName()

   public bool isInternal()
   public bool isUserDefined()

   public string getDocComment()
   public int getEndLine()
   public string getFileName()
   public int getNumberOfRequiredParameters()
   public int getNumberOfParameters()
   public ReflectionParameter[] getParameters()
   public int getStartLine()
   public array getStaticVariables()

   public bool returnsReference()

}

   $method = new ReflectionMethod("corporatedrone", "setTieColor");

   $isPublic = $method->isPublic() ? "Yes" : "No";

   printf ("Is %s public: %s <br />", $method->getName(), $isPublic);

   printf ("Total number of parameters: %d", $method->getNumberofParameters());


?>