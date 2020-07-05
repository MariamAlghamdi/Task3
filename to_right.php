<?php

  $conn = mysqli_connect('localhost', 'mariam', '1234', 'robot_control_panel');

  if(!$conn){

    echo 'Connection error: ' . mysqli_connect_error();
  }

  $sql ="INSERT INTO robot_steps(toright,toleft,forward,backward,stop) VALUES('R','','','','')
  ";
  if(mysqli_query($conn, $sql)){


  }else{

    echo 'query error: '. mysqli_error($conn);
  }
 ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1><?php echo 'R'; ?></h1><br>



</body>
</html>
