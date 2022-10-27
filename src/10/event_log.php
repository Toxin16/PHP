<?PHP
  $filep = fopen("./logfile.txt","a");
  
  if (!$filep)  die ("파일을 열수 없습니다.");

  $time = date("Y-m-d H:i:s",time());
  fputs ($filep, $time);
  fputs ($filep, "\n");

  fclose ($filep);

  print "connect service";
  $fp = fopen("./logfile.txt", "r");

while($line = fgets($fp, 1024))
    print $line . "<br>";
fclose($fp);
?>
