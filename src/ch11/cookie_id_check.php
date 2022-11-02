<?PHP 

$name = $_POST['name'];
  if($name)
    $_COOKIE['user'] = $name;   
    print "Hello ".$_COOKIE['user']."!";
?>

<form method='post' action='cookie_id_check1.php'>
  <input type='submit' value='삭제'>
</form>
