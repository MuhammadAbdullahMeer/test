
<?php

// echo"<pre>";
// print_r($_POST);
// echo"</pre>";

// exit();
    
    // $mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error(mysqli));



    $mysqli = new mysqli('localhost','root','','createcrud');//hostingname ,username ,password ,databasename

    // echo date('h:i:s:u, F I')
    if(isset($_POST['studentName'])){
        $studentName = $_POST['studentName'];
        $grade = $_POST['grade'];
        $section = $_POST['section'];
        $teacher= $_POST['teacherName'];
 

       
        echo 'student name is: ' . $studentName . '</br>';
        echo 'he/she is in grade: ' . $grade . '</br>';
        echo 'he/she is studing in section: ' . $section . '</br>';
        echo 'he/she is studing from teacher: ' . $teacher . '</br>';


    $mysqli->query("INSERT INTO data(stdname,grade,section,classTeacher) VALUES('$studentName','$grade','$section','$teacher')") or die($mysqli->error);//columname();
    }



    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
    }
?>