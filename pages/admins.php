<?php
   include('session.php');
   include 'PAGINATE.php';
   $admin_type = $_SESSION['admin_type'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

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
<script src="scripts/jquery-1.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
    
   
        
</script>

</head>

<body>
<?php 
   
   	if($admin_type == TYPE_SUPERADMIN):
       	if( isset( $_POST['arc'] ) )
       	{
       		
       		$id=$_POST['archive'];
       	
       		$sql = "delete from admin where id='$id'";
       	
       		mysqli_query($conn,$sql);
       		echo '<script> $("#table1").load(location.href + " #table1"); </script>';
       	}
       
       	
       
    endif;
   
   
   
   ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: white;">
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
            < 
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
                      <li>&nbsp;Admins&nbsp;</li>
                                           
                    </ol>
                        <h1 class="page-header">ADMINS</h1>
                        <div id="table1">
                        <?php if($admin_type == TYPE_SUPERADMIN): ?>
                            <button type="button" class="btn btn-success btn-lg" style="float:center" onclick="window.location='../pages/addadmins.php'";>ADD ADMIN</button><br><br><br>
                        <?php endif; ?>
                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ADMINS
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="pull-left" >
                               
                                     
                                    </div><!-- End .select_sortby -->
                                    <br>
                                        <br>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bproducered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Edit</th>
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Type</th>

                                            <?php if($admin_type == TYPE_SUPERADMIN): ?>
                                                <th>Delete</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <?php


 
		$sql = "select * from admin ";
		$result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
 


?>

                                    <tbody>
                                       
                                        <?php $row = mysqli_fetch_array($result); 
                                        	
                                 	
                                        	
                                            echo "<tr>
        		                           <td><form action='editpageadmins.php' method='post'>
                                           <input type='hidden' name='idc' value=".$row[0].">
                                           <input type='submit' name='edit' value='Edit'/>
                                           </form>
                                           </td>
        		
                                            <td>" . $row[0] . "</td>
                                            <td>" . $row[1] . "</td>
    		                                <td>" . $row[2]. "</td>
                                            <td>" . $row[3] . "</td>";
                                            
                                            if($admin_type == TYPE_SUPERADMIN):
                                               
                                                    	
                                                   echo"
                            		               
                        		                    <td> <form action='admins.php' method='post'>
                                                   <input type='hidden' name='archive' id='archive' value=".$row[0].">
                                		           <input type='submit' name='arc' value='Delete'>
                                                   </form></td>";
                                               
                                            endif;
                                       
                                        ?>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                    </div>
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
