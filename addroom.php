<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>

<section class="add-room-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron text-center">
                    <h3>Here you will Assign Room</h3>
                    <form class="form-horizontal" method="post" action="add.room.php">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Room</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="room">Room</label>
                                <div class="col-md-5">
                                    <input id="room" name="room" type="text" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>



                            <!-- Button -->
                            <div class="form-group" align="right">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <div class="col-md-5">
                                    <button id="submit" name="submit" class="btn btn-primary">Add Room </button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


   <section class="room-list-view">
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

                    $query = ("SELECT * FROM rooms");
                    $result = mysqli_query($conn,$query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                            <th>Rooms</th>
								            <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['room'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='roomlist.php'>
                        <input name='id' type='hidden' value='".$row['id']."';>
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
	
    if(isset($_POST['id']))
    {
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $sql = mysqli_query($conn,"DELETE FROM rooms WHERE id='$id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error());
    }else{
        echo '<script type="text/javascript">
                      alert("Room Successfully Deleted");
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
