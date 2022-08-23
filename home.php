<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `course`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `faculty`";
$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>


<section class="home-area-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Here you will set your schedules</h2>
                <form class="form-horizontal" method="post" action="add.home.php">
                    <!-- Method Two -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="faculty">Faculty</label>
                        <div class="col-md-5">
                            <select id="faculty" name="faculty" class="form-control">
                                <?php echo $options;?>
                            </select>
                        </div>
                    </div>

                    <!--Method One-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Course">Course</label>
                        <div class="col-md-5">
                            <select id="course" name="course" class="form-control">

                                <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                <option value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>

                                <?php endwhile;?>

                            </select>



                        </div>
                    </div>


                    <!-- ENd  -->




                    <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `rooms`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `subject`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>





                    <!-- Method Two -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="subject">Department</label>
                        <div class="col-md-5">
                            <select id="subject" name="subject" class="form-control">
                                <?php echo $options;?>
                            </select>
                        </div>
                    </div>



                    <?php while($row2 = mysqli_fetch_array($result2)):;?>

                    <option value="<?php echo $row2[0];?>"><?php echo $row2[2];?></option>

                    <?php endwhile;?>





                    <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `rooms`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `rooms`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>





                    <!-- Method Two -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="room">Room</label>
                        <div class="col-md-5">
                            <select id="room" name="room" class="form-control">
                                <?php echo $options;?>
                            </select>
                        </div>
                    </div>

                    <!--Method One-->



                    <?php while($row2 = mysqli_fetch_array($result2)):;?>

                    <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>


                    <?php endwhile;?>








                    <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>






                    <!--Method One-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="start_time">Start time</label>
                        <div class="col-md-5">
                            <select id="start_time" name="start_time" class="form-control">
                                <?php echo $options;?>


                                <?php while($row2 = mysqli_fetch_array($result2)):;?>

                                <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>


                                <?php endwhile;?>

                            </select>

                        </div>
                    </div>









                    <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>






                    <!-- Method Two -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="end_time">End time</label>
                        <div class="col-md-5">
                            <select id="end_time" name="end_time" class="form-control">
                                <?php echo $options;?>
                            </select>
                        </div>
                    </div>



                    <?php while($row2 = mysqli_fetch_array($result2)):;?>

                    <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>

                    <?php endwhile;?>

                    <!-- Button -->
                    <div class="form-group" align="right">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-5">
                            <button id="submit" name="insert" class="btn btn-primary"> Set schedule</button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>

</section>



<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>
