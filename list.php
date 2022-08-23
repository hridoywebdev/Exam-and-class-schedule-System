<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>

<section class="all-list-view">

    <div align="center">
        <legend>List of Faculties</legend>
        <?php
				include_once("faclist.php");
			?>
    </div>
    <br><br><br>
    <div align="center">
        <legend>List of Courses</legend>
        <?php 
              include_once("corlist.php");
			?>
    </div>
    <br><br><br>

    <div align="center">
        <legend>List of Subjects</legend>
        <?php 
			  include_once("sublist.php");
			?>
    </div>
    <br><br><br>
    <div align="center">
        <legend>List of rooms</legend>
        <?php
				 include_once("roomlist.php");
			?>

    </div>
    <br><br><br>
    <div align="center">
        <legend>List of class time</legend>
        <?php
				 include_once("timelist.php");
			?>
    </div>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
