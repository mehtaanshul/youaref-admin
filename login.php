<?php
session_start(); 
$empty = false;
$wrong = false;
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);

if(isset($_POST['email'])){
    if (isset($_POST['email']) && isset($_POST['pass']) ){
        if ($_POST['email']=="info@youaref.com" && $_POST['pass']=="despacito@321"){

            $_SESSION['login'] = "true";
            $url = "http://localhost/admin/index.php";
            ob_start();
            header('Location: '.$url);
            ob_end_flush();
                        // echo "login";

            die("should have redirected by now");
        }
        else{
            $wrong = true;
        }
    }
    else {
        $empty = true;
    }
}
if(isset($_SESSION['login'])){

    echo $_SESSION['login'];
}
?>

<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
<div class="container" style="color:blue;">    
    <div id="loginbox" style="margin-top:50px;" class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <div <?php ?> class="well">
                    <?php 
                    if($wrong== true){
                        echo "You entered wrong credentials";
                    }
                    else{
                     echo "Enter email and password to continue";   
                    }
                    ?>
                </div>                            
                <form id="loginform" class="form-horizontal" role="form"  method="POST">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" name="email" class="form-control" required="" placeholder="email">                                        
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="pass" required="" type="password" class="form-control" name="pass" placeholder="password">
                    </div>


              <div style="margin-top:10px" class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls">
                  <!-- <a id="btn-login" href="#" class="btn btn-success">Login  </a> -->
                  <input  class="btn btn-success" type="submit" name="" value="Login">
              </div>
          </div>
      </form>     
  </div>                     
</div>  
</div>
</div>
