<?php
   include('session.php');
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Give away</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color: white;">
            <div class="navbar-header" style="float: right" >
                
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
                <ul class="nav navbar-top-links navbar-right" style="float: right;" >
                
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
                     </div>
            <!-- /.navbar-header -->
 <div  style="text-align: center;">
                <img style="width: 150px;   " src='this.src="../images/logo.jpg "' onerror='this.src="../images/logo.png"'   >                        
                </div>
             
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="background-color: white;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="producer.php"><i class="fa fa-shopping-cart fa-fw"></i>producer</a> 
                        </li>
                         <li>
                            <a href="giveaway.php"><i class="fa fa-glass fa-fw"></i>Give away</a> 
                        </li>
                       
                        
                       <li>
                            <a href="admins.php"><i class="fa fa-home fa-fw"></i>Admins</a> 
                        </li>
                    
                            
                        
     </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                 
                <div class="row">
                    <div class="col-lg-12">
                    <ol class="breadcrumb" style="background-color:transparent; float:right; ">
                      <li>Home&nbsp;</li>    
                      <li>&nbsp;Give away&nbsp;</li>
                      <li>&nbsp;Add Give away&nbsp;</li>                      
                    </ol>
                        <h1 class="page-header">ADD GIVE AWAY</h1>   
              







                        <div class="col-lg-4">
                        <form enctype="multipart/form-data"  action="additems.php" method="post">
Name:  <input type="text" name="namee" style="float:right;" required="required">

<br>
<br>
Recipient:  <input type="text" name="rec" style="float:right;" required="required">

<br>
<br>

Purpose:  <input type="text" name="pr" style="float:right;" required="required">
<br>
<br>
   
 
<br>
<br>
 

 


<br>
<br>

<div align ='center' colspan='6' >
		<input type='submit' name='givea' value='DONE' style="background-color: lightgreen; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;">

</div>
		
		</form>
		

		
    </div>
                    </div>                
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
             
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
