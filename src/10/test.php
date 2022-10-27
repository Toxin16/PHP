<?php
$fp = fopen("./logfile.txt", "a");  //파일을 쓰기전용으로 열기

$t = date("Y-m-d H:i:s", time());   //변수t에 시간 데이터 
fputs($fp, $t); //열었던 파일에 t 데이터 넣기
fputs($fp, "\n");  

fclose($fp);    //파일 닫기

$fp = fopen("./logfile.txt", "r");  //파일을 읽기전용으로 열기

while($line = fgets($fp, 100))     //line변수에 파일을 읽어옴
    print $line;        // 출력
fclose($fp);
?>