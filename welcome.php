    <?php session_start(); 
    require('actions/fetchAllBookRecord.php');

    if(!isset($_SESSION['user_session'])){
    header("Location:login.php");
    }
    $bookRecord=$allBook;
    $selectBook = array_intersect_key($bookRecord, array_unique(array_column($bookRecord, 'author')));
   //https://stackoverflow.com/questions/19219362/remove-duplicate-in-array-based-on-column-value
    ?>
    <html>
        <head>
            <title>publication</title>
        
            
        </head>
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
            <small>welcome</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        <div class="container">
                
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


            <div class="row">
                
                <div class="col-md-2"></div>
                <div class="col-md-8">
                     
                    <div class="text-right btn-toolbar">
                        <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#searchModel">Search</button>
                        <a href="create.php" class="btn btn-success pull-right">Create</a>    
                    </div>
       
       
                    <table class="table table-bordered">    
                        <tr>
                            <th>S.No.<th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th colspan="2">Action</th>

                        </tr>
                        <?php
                            if(isset($_SESSION['searchedBook'])){
                                $allBook=$_SESSION['searchedBook'];
                            }
                            $i=0;
                            foreach($allBook as $book){
                            $i++;
                        ?>
                        <tr>
                            
                            <td><?php echo $i; ?><td>
                            <td><?php echo $book['title']; ?></td>
                            <td><?php echo $book['author']; ?></td>
                            <td><?php echo $book['publisher']; ?></td>
                            <td><a href="actions/fetchSingleBookRecord.php?id=<?php echo $book['id']; ?> " class="btn btn-info">Edit</a></td>
                            <td><a class="btn btn-danger" onclick="delete_id(<?php echo $book['id']; ?>)">Delete</a></td>

                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>    
            </div>

        </div>
        </section>
        
        
    </div>
    </div>
    <!--search model -->
    
    <div class="modal fade" id="searchModel" role="dialog">
        <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enter Book Details </h4>
                </div>
                <div class="modal-body">
                

                 <!--<form role="form" id="searchForm" method="POST" action="actions/searchHandler.php">-->
                 <form role="form" method="POST" action="actions/searchHandler.php">
                    
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <div>
                            <input type="text" class="form-control input-lg searchGroup" name="title" value="">
                        </div>
                        <div class="error">&nbsp;</div>
                    </div>
                    <!--<div class="form-group">
                        <label class="control-label">Author</label>
                        <div>
                            <input type="text" class="form-control input-lg searchGroup" name="author" value="">
                        </div>
                        <div class="error">&nbsp;</div>
                    </div>-->
                    <div class="form-group">
                        <label class="control-label">Author</label>
                        <div>
                            <select name="author" id="author">
                                <option selected="selected" value="">Choose one</option>
                                <?php
                                    foreach($selectBook as $book) { ?>
                                    <option value=<?php echo $book['id'] ?> ><?php echo $book['author'] ?></option>
                                <?php
                                    } ?>
                            </select>
                        </div>
                        <div class="error">&nbsp;</div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Publisher</label>
                        <div>
                            <input type="text" class="form-control input-lg searchGroup" name="publisher" value="">
                        </div>
                        <div class="error">&nbsp;</div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="submit" class="btn btn-success">Search</button>
                         </div>
                    </div>

                </form>



                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        
    </div>
    <!--end search model -->


    <footer><?php include('footer.php'); ?></footer>

    </body>
    <script>
            function delete_id(id)
            {
                
                if(confirm('Sure To Remove This Record ?'))
                {
                    window.location.href='actions/deleteBookRecord.php?id='+id;
                }
            }


    jQuery(function ($) {

      $('#searchForm').validate({
         
            rules:{
              
              title:{
                require_from_group:[1,".searchGroup"],
              },
              author:{
                require_from_group:[1,".searchGroup"],
              },
              publisher:{
                require_from_group:[1,".searchGroup"],
              },
            },
            messages:{
                
                title:{
                 required:"Please enter at least 1 field",   
                },
                author:{
                 required:"Please enter at least 1 field",   
                },
                publisher:{
                 required:"Please enter at least 1 field",   
                },
                
            },
            
            
         });
        
     });
    </script>
    </html>