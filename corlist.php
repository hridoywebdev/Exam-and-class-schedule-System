<?php
   include_once("header.php");
   include_once("navbar.php");
?>



<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
               $host       = "localhost"; 
               $username   = "root"; 
               $password   = "";
               $database   = "insertion"; 
               
               // select database
               $conn = mysqli_connect($host,$username,$password,$database) or die(mysqli_error()); 

                    $query = ("SELECT * FROM course");
                    $result = mysqli_query($conn,$query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Code</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        
                        echo "<td>" . $row['course_code'] . "</td>";
                        echo "<td>" . $row['course_name'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='corlist.php'>
                        <input name='course_id' type='hidden' value='".$row['course_id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
       
    if(isset($_POST['course_id']))
    {
    $course_id = mysqli_real_escape_string($conn,$_POST['course_id']);
    $sql = mysqli_query($conn,"DELETE FROM course WHERE course_id='$course_id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error());
    }else{
       echo '<script type="text/javascript">
                      alert("Course Successfully Deleted");
                         location="list.php";
                           </script>';
    }
    
    }
    }

    ?>


