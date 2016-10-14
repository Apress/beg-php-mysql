 <?php

class Employee {

  public static $favSport = "Football";

  public static function watchTV()
  {
    echo "Watching ".self::$favSport;
  }

}

class Executive extends Employee {
  public static $favSport = "Polo";
}

echo Executive::watchTV();

?>

