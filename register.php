<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");

?>

<body>



    <section class="login-area-home">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="content">
                                <img src="images/logo.jpg" alt="">
                                <h2>Exam and class schedule System</h2>
                                <div class="form">
                                    <form class="form-horizontal" method="post" action="regis.php">
                                        <fieldset>

                                            <legend>Create Your Account Here</legend>
                                            <br>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="username">Username</label>
                                                <div class="col-md-5">
                                                    <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="password">Password</label>
                                                <div class="col-md-5">
                                                    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">

                                                </div>
                                            </div>

                                            <div class="form-group" align="right">
                                                <label class="col-md-4 control-label" for="login"></label>
                                                <div class="col-md-5">
                                                    <input type="submit" name="lgn" class="btn btn-success " value="Add">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>


                                <br>
                                <font color="white">Already have an acount?</font> <a href="index.php">Login here </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>
