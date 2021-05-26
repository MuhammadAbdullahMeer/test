<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require_once 'myphp.php'; ?>
    <?php
  
  $mysqli = new mysqli('localhost','root','','createcrud');
  $result = $mysqli->query("SELECT * FROM data") or die ($mysqli->error);
    pre_r($result);

    function pre_r($result)
    {
      echo "<pre>";
      print_r($result);
      echo"</pre>"; 
    }


    ?>

<form action="myphp.php" method="POST">
    <div class="from-group">
  <label for="fname">Student Name:</label>
  <input type="text" name="studentName"><br><br>
</div>

  <label for="lname">Grade:</label>
  <input type="number" name="grade"><br><br>

  <label for="fname">Section:</label>
  <input type="text" name="section"><br><br>

  <label for="lname">Class Teacher:</label>
  <input type="text" name="teacherName"><br><br>

  <input type="submit" value="Submit">

 



    </form>
</body>
</html>

