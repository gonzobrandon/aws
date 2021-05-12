<html>
<head></head>
<body>
	Hello this is your application<br/>
<?php

  $servername = "HOSTNAME";
  $username = "USERNAME";
  $password = "PASSWORD";
  $database = "DATABASE"
  $port = 3306

  // Create connection
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $conn = new mysqli($servername, $username, $password, $database, $port);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  
  $query = "SELECT * FROM employees WHERE emp_no = 1;";
  
  $result = mysqli_query($conn, $query);

  /* fetch associative array */
  while ($row = mysqli_fetch_assoc($result)) {
    printf("Hello, %s %s\n", $row['first_name'], $row['last_name']);
  }


?>



</body>
</html>