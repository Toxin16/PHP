<html>
<body>
<?php
  $conn = mysqli_connect('localhost', 'root', '', 'goods');

  $query = "select * from fruit where price >= 50";
  $result = mysqli_query($conn, $query);
  print "<table border=1><tr>" .
        "<th>Name</th>" .
        "<th>Price</th>".
        "<th>Color</th>".
        "<th>Country</th>";

  while($row = mysqli_fetch_row($result)) {
    print "<tr><td>".$row[0]."</td>".
      "<td>".$row[1]."</td>".
      "<td>".$row[2]."</td>".
      "<td>".$row[3]."</td></tr>";
  }
  print "</table>";

  mysqli_free_result($result);
  mysqli_close($conn);
?>
</body>
</html>