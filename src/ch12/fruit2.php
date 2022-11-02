<html>
<body>
<?PHP 
  $conn = mysqli_connect('localhost', 'root', '', 'goods');

  if(mysqli_connect_errno()) {
    printf("%s \n", mysqli_connect_error());
    exit;
  }
  
  $name = $_POST['name']; $price = $_POST['price'];
  $color = $_POST['color']; $country = $_POST['country'];
  $query = "INSERT INTO fruit VALUES ('$name', $price, '$color', '$country')";
  $result = mysqli_query( $conn, $query );

  if ($result)
    print "입력되었습니다.<br>";
  else
    print "입력되지 않았습니다.<br>";  
       "<th>Country</th></tr>";
?>
<a href="./fruit_mysql.php">결과보기</a>
</body>
</html>
