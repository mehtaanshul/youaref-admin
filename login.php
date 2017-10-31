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
<!--<div class="container" style="color:blue;">    
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
              

                <div class="col-sm-12 controls">
                  <input  class="btn btn-success" type="submit" name="" value="Login">
              </div>
          </div>
      </form>     
  </div>                     
</div>  
</div>
</div> -->
<Style>
.wrapper {    
    margin-top: 80px;
    margin-bottom: 20px;
}

.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  background-color: #eee;
  border: 3px dotted rgba(0,0,0,0.1);  
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.colorgraph {
  height: 7px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</Style>

<div class = "container">
    <div class="wrapper">
        <form action="" method="post" name="Login_Form" class="form-signin">       
            <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
              <hr class="colorgraph"><br>
              
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="" autofocus="" />
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required=""/>            
             
              <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>            
        </form>         
    </div>
</div>
