<?PHP
  $dataset = file("major.txt");

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
?>
