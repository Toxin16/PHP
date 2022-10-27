<?PHP
  $dataset = file("major.txt");

  print "<table style='margin-left:auto;margin-right:auto;text-align:center;'>";
  print "<th>Name</th><th>Major</th><th>Degree</th>";
  foreach($dataset as $data)
  {
    print "<tr>";
    $str = explode(" ", $data);
    print "<td>".$str[0]
    ."</td><td>".$str[1]
    . "</td><td>". $str[2]."</td>";
    print "</tr>";
  }
  print "</table>";
?>
