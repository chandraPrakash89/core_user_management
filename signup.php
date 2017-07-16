<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Sign Up</title>
        
        
    </head>
<body>
<div class="container">   
<header><?php include('header/header.php'); ?></header>            
        <div id="signupbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <form id="signupForm" class="form-horizontal" name="signupForm" method="post" action='./actions/signupHandler.php'>
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"  placeholder="Email Address">
                                    </div>
                                    <div id="email_error" class="val_error"></div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstName" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstName" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name= "submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                       
                                    </div>
                                </div>
                            <div class="form-group  pull-right" style="padding-right: 50px">
                                    <div>
                                        <a href="login.php">
                                            Sign In
                                        </a>
                                        </div>
                                    </div>
                            </div>
                    </form> 
                          
        </div>
                        
                </div>  
</div>
<footer><?php include('footer.php'); ?></footer>               
</body>
</html>


