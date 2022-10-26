<?php
//open
$filepnt = fopen("./juliet.txt", "r");
if(!$filepnt) die("파일을 열 수 없습니다.");

//use
while($line = fgets($filepnt, 1024))    //filepnt로부터 1024개를 읽어와서 $line에 저장
    print $line;

//close
fclose($filepnt);
?>