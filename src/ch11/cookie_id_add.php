<?PHP 
  setcookie("user", "", time()+3600, "/", "localhost"); //쿠키가 존재하는 시간, 3600지나면 쿠키삭제
?>

<form method='post' action='cookie_id_check.php'> <!--입력한것이 name으로 check.php에 전달함-->
  <input type='text' name='name' size='4'>
  <input type='submit' value='입력'>
</form>
