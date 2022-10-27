<?PHP
  function A()
  {
    global $n;  //11번 라인에 있는 $n을 사용하겠다는 표시
    $n = "A";
    $m = "A";
  
     print "$n, $m<br>";
  }
  
  $n = "M";
  $m = "M";
  
  print "$n, $m<br>";
  A();
  print "$n, $m<br>";
?>
