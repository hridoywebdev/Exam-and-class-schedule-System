<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>


<body>

    <section class="add-course">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron text-center">
                        <h3>Here you will Assign Courses that are available in university</h3>
                        <form class="form-horizontal" method="post" action="add.cor.php">
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Add Course</legend>


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="corcode">Course Code</label>
                                    <div class="col-md-5">
                                        <input id="corcode" name="corcode" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="corname">Course Name</label>
                                    <div class="col-md-5">
                                        <input id="corname" name="corname" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group" align="right">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-5">
                                        <button id="submit" name="submit" class="btn btn-success">Add Course</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="view-course">
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
    </section>


    <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>
