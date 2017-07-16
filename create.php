<?php session_start(); 

if(!isset($_SESSION['user_session'])){
   header("Location:login.php");
}
if(isset($_SESSION['searchedBook'])){
      unset($_SESSION['searchedBook']);
}
?>
<html>
<head><title>publication</title></head>
<body class="hold-transition skin-blue sidebar-mini">
<header class="main-header"><?php include('header.php'); ?></header>

<div class="wrapper">    
<aside class="main-sidebar">

    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
      </ul>
    </section>
</aside>
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Admin Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>    
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Add Book</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="actions/create.php">
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name='title' class="form-control" placeholder="Enter book title">
                </div>
                <div class="form-group">
                  <label>Author</label>
                  <input type="text" name='author' class="form-control" placeholder="Enter author name">
                </div>
                <div class="form-group">
                  <label>Publisher</label>
                  <input type="text" name='publisher' class="form-control" placeholder="Enter publisher name">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="create">
                </div>

            </form>
        </div>
    </div>
</section>
</div>
</body>
</html>
