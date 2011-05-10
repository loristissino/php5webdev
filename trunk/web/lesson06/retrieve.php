<?php

$dbinfo=parse_ini_file('db.ini');

// print_r($dbinfo);

try
{
  $dbh = new PDO($dbinfo['DSN'], $dbinfo['USER'], $dbinfo['PASSWORD']);
  $sql = "SELECT * FROM books";
  
  $books=array();
   
  foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row)
  {
    //print_r($row);
    $books[]=$row;
  }
}
catch (Exception $e)
{
  echo "DB connection unavailable";
  die();
}

?>
<html lang="it">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Books</title>
</head>
<body>
<h1>Books</h1>
<ul>
<?php foreach($books as $book): ?>
  <li><?php echo $book['title'] ?></li>
<?php endforeach ?>
</ul>
</body>
</html>

