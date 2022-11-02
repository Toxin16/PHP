유용한 사이트 : geeksforgeeks
VScode tip : 변수 한번에 바꾸기 Ctrl + Shift + L

서버 Web Server, DB Server
다수의 클라이언트가 Browser을 이용해 Server에 접속, 접속번호=포트
80:default port, localhost로 접속가능 만약 포트 번호를 바꾸면 localhost:1234 로 접속해야함.

aws 학습하기
https://aws.amazon.com/ko/free/?trk=fa2d6ba3-df80-4d24-a453-bf30ad163af9&sc_channel=ps&s_kwcid=AL!4422!3!563761819834!e!!g!!aws&ef_id=EAIaIQobChMIwLbipsXZ-gIVIsFMAh2J4ANqEAAYASAAEgIXsvD_BwE:G:s&s_kwcid=AL!4422!3!563761819834!e!!g!!aws&all-free-tier.sort-by=item.additionalFields.SortRank&all-free-tier.sort-order=asc&awsf.Free%20Tier%20Types=*all&awsf.Free%20Tier%20Categories=*all
Azure GCP
php파일은 서버컴퓨터에 저장
주석 : #, //
vscode에서 웹페이지 실행 : Alt + B

221012
주소창을 통해서 전달하는 방식 : get
파일 특정 영역으로 전달하는 방식 : post
&nbsp; #php에서의 공백
<<2 #왼쪽으로 2번 시프트 = 2의 2승을 곱함과 같음,   >>3 //오른쪽으로 3번 시프트 = 2의 3승을 나눔과 같음

연산자 우선순위 : 단항 - 산술 - shift - 관계 - bit - 논리 - 삼항 - 할당 - 콤마(,)
123 == 123.0 (true)  123 === 123.0 (false)   # ==은 값만 검사, ===은 데이터 타입도 검사

221013
이중배열 $freshman = array(
  "David" =>  "Computer",
  "Alice"  =>  "Math",
  "Elsa"  =>  "Physics",
  "Bob"  =>  "Music",
  "Chris" =>  array("Electronics", "Statistics")
); 에서 Electronics를 출력하는 코드는 print $freshman["Chris"][0]; 

위의 배열에 "Clement" => array("First" => "Dance", "Second" => "Design")를 추가한다면 Dance를 출력하는 코드는 print $freshman["Clement"]["First"];

221019
unset($fruit["Pear"], $fruit["Banana"]);  //배열삭제
array_diff //다른 array와 비교해서 array에 없는 값을 반환
print_r //변수의 정보 출력
배열안에 인덱스가 문자인 배열이 섞여있으면 diff 사용불가. 인덱스가 숫자이면 가능.  //PHP언어 잘못된 제작.
print와 echo의 차이 : echo는 그냥 명령문일 뿐이라 함수처럼 사용할 수 없고 리턴 값이 없지만, print는 함수처럼 사용할 수 있고 1을 리턴한다는 점
배열의 정렬 : sort($배열명);  //오름차순 정렬. natsort($배열명); //숫자크기순 정렬
foreach : 왼쪽에서 오른쪽으로 하나씩 가져옴(PHP). java에서는 반대
배열 : 인덱스가 숫자로 이루어짐. 연상배열 : 인덱스가 문자로 이루어짐, 문자열에 의해 참조.
재귀함수 : 자기자신을 호출하는 함수
지역변수 : 함수 내에서만 사용되는 변수. 전역변수(global) : 함수 밖에서도 사용되는 변수 
static로 선언 : 한번만 초기화. 
<?PHP
  function inc()
  {
    static $i = 1;
    print $i."<br>";
    $i = $i + 1;
  }  
 
  for ($j=1; $j<=10; $j++)
    inc();
?>
에서 결과는 12345678910이 됨. static이 없으면 결과는 1111...이 됨.
call by reference : $를 붙이면 주소를 참조

221020
https://lordofkangs.tistory.com/41
ipconfig - ip확인, 외부에서 접근할때는 내 아이피 210.110.174.186를 입력, 내가 내 아이피 접근할때는 127.0.0.1 or localhost
도메인 dns, everything
환경변수 - path 설정하면 다른 디렉토리에서도 접근 가능.
수학함수 sqrt() //제곱근, pow()  //제곱
define() 과 변수의 다른점 : define는 상수값. 값이 고정. 변수는 값이 바뀔 수 있음. define() 사용이유 : 가독성
rtrim : 우측여백삭제, ltrim : 좌측여백삭제, trim : 좌우 여백삭제
sscanf : 문자열을 주어진 문자열로 분리

221027 파일
r : 읽기전용, r+ : 읽고쓰기, w : 쓰기전용(파일포인터는 파일의 시작에 위치, 존재하지 않으면 생성, 존재하면 삭제), a : 쓰기전용(포인터가 파일의 끝에위치, 존재하지 않으면 생성)

php에서 table 사용
  print "<table>";
  foreach($dataset as $data)
  {
    print "<tr>";
    $str = explode(" ", $data);
    print "<td>Name</td><td>".$str[0]."</td><td>Major</td><td>"
    .$str[1]. "</td><td>Degree</td><td>". $str[2]."</td>";
    print "</tr>";
  }
  print "</table>";
  
세션 : 모든 페이지에서 사용가능한 변수 session_start();
global  //전역변수

1102
서버에서 데이터 관리 : 세션 사용
클라이언트에서 데이터 관리 : 쿠키

## 데이터베이스
C:\laragon\bin\mysql\mysql-5.7.33-winx64\bin>
mysql -u root -p (enter), root password 없음
show databases; //데이터베이스 목록출력, show tables; //테이블 출력, desc fruit; //fruit table 목록출력
use goods;  //데이터베이스의 목록의 goods 사용
insert into fruit values ('Apple', 10, 'Red', 'Korea');

ctrl + c : 작업취소
용어
원소 하나 : data / 원소의 모임 : 필드 / 서로 연관성이 있는 필드의 묶음 : record / 전체 : table
데이터베이스에는 여러 테이블이 있을 수 있음. 

### php db 연동
$conn = mysqli_connect('localhost', 'root', '', 'goods'); 
