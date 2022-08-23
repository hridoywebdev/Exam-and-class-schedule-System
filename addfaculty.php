<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>



<body>

    <section class="add-faculty">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron text-center">
                       <h3> Here you will Assign faculty</h3>
                        <form class="form-horizontal" method="post" action="add.fac.php">
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Add Faculty</legend>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="falname">Faculty Name</label>
                                    <div class="col-md-5">
                                        <input id="falname" name="falname" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Designation">Designation</label>
                                    <div class="col-md-5">
                                        <input id="Designation" name="Designation" type="text" placeholder="" class="form-control input-md" required="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group" align="right">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-5">
                                        <button id="submit" name="submit" class="btn btn-primary">Add Faculty</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="view-faculty">


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

                    $query = ("SELECT * FROM faculty");
                    $result = mysqli_query($conn,$query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Faculty</th>
                                <th>Designation</th>
                                 <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['faculty_name'] . "</td>";
                        echo "<td>" . $row['designation'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='faclist.php'>
                        <input name='faculty_id' type='hidden' value='".$row['faculty_id']."';>
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
    
    if(isset($_POST['faculty_id']))
    {
    $faculty_id = mysqli_real_escape_string($conn,$_POST['faculty_id']);
    $sql = mysqli_query($conn,"DELETE FROM faculty WHERE faculty_id='$faculty_id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error());
    }else{
      echo '<script type="text/javascript">
                      alert("Faculty Successfully Deleted");
                         location="addfaculty.php";
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
