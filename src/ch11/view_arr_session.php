<?PHP 
session_start();
  foreach( $_SESSION['fruit'] as $fr )
  {
    print "$fr<br>";
  }
?>
