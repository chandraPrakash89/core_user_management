<html>
    <head>
       
        <title>Login</title>
    </head>
<body>
<?php
    if(!empty($_GET['message'])) {
         $message = $_GET['message'];
         
?>
<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a
    <strong>Success!</strong> <?php echo $message; ?>.
</div>
<?php
    }
?>
<?php
    if(!empty($_GET['error_msg'])) {
         $message = $_GET['error_msg'];
?>
<div class="alert alert-Danger fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a
    <strong>Error!</strong> <?php echo $message; ?>.
</div>
<?php
    }
?>    
<div class="container">
<header><?php include('header/header.php'); ?></header> 
            
                
        
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
     
                        <form id="loginForm" name="loginForm" class="form-horizontal" method="post" action='./actions/loginHandler.php'>
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login" type="email" class="form-control" name="email" placeholder="email">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="password" autocomplete="new-password">
                            </div>
                                
                            <div class="input-group">
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
<!--                                      <a id="btn-login" href="#" class="btn btn-success">Login  </a>-->
                                      <button id="btn-login" type="submit" name= "submit" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Login</button>
                                    </div>
                                </div>
                            </form>      
                    </div> 
                    <div class="form pull-right" style="padding-right: 50px">
                                <a href="signup.php">
                                    Sign Up
                                </a>
                    </div>  
            </div>
        </div>
        </div>   
</div>
<footer class="main-footer"><?php include('footer.php'); ?></footer>               
</body>
 
</html>
<script>
   jQuery(function ($) {

      $('#loginForm').validate({
         
            rules:{
              
              email:{
                required:true,
              },
              password:{
                required:true,
                minlength:6,
              },
              
            },
            messages:{
                
                email:{
                 required:"Please enter email",   
                },
                password:{
                 required:"Please enter password",   
                },
                
            },
            
            
      });
        
   });
      
    
</script>
