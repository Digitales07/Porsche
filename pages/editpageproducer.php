<?php
   include('session.php');
   $type = $_SESSION['admin_type'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit</title>

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
                         <?php

if(isset($_POST['submit']))
	{
	
		
		$nm = $_POST['name'];
		$dt=$_POST['date'];
		$rl=$_POST['rol'];
		$rh=$_POST['roh'];
                $qt=$_POST['quty'];
		$id=$_POST['ido'];
		$de=$_POST['des'];
                $wc = $_POST['wc'];
		
		$sql= "UPDATE producer SET id='$id',wap='$wc',name='$nm',quantity='$qt',description='$de',rol='$rl',roh='$rh',date='$dt' where id='$id'";
		mysqli_query($conn,$sql);
	
		
 
		
	if(mysqli_query($conn,$sql) )
		{
			
			?>
			<script type="text/javascript">
			window.location.href = '../pages/producer.php';
			</script>
			<?php 
   }
			
	}
	 

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
                      <li>&nbsp;producer&nbsp;</li>
                      <li>&nbsp;Edit producer&nbsp;</li>                      
                    </ol>
                        <h1 class="page-header">Edit producer</h1>   
              
<?php 
$i=0;


$idproducer = null;
$cid = null;
$pid = null;
if(isset($_POST['edit']))
{
$idproducer = $_POST['id'];

}

 

 


$sql3 = "select * from producer where id =".$idproducer;
$result3 = mysqli_query($conn, $sql3) or die("Error in Selecting " . mysqli_error($conn));


while ($row = mysqli_fetch_array($result3)) {
	$date=$row['date'];
        $name = $row['name']; 
        $rol = $row['rol']; 
	$roh = $row['roh'];
        $d=$row['description'];
        $qty= $row['quantity'];
        $wcode= $row['wap'];
        $i++;
}

	
	

?>


                        <div>



                        <div class="col-lg-4">
                        <form action="editpageproducer.php" method="post">
                        
 Wap Code:  <input type="text" name="wc" value="<?php echo $wcode; ?>" style="float:right;">

<br>
<br>
Name:  <input type="text" name="name" value="<?php echo $name; ?>" style="float:right;">

<br>
<br>
Quantity:  <input type="text" name="quty" value="<?php echo $qty; ?>" style="float:right;">

<br>
<br>
Re order low:  <input type="text" name="rol" value="<?php echo $rol; ?>" style="float:right;">

<br>
<br>
Reorder high:  <input type="text" name="roh" value="<?php echo $roh; ?>" style="float:right;">

<br>
<br>
Description:  <input type="text" name="des" value="<?php echo $d; ?>" style="float:right;">

<br>
<br>
Date:  <input type="date" name="date" value="<?php echo $date; ?>" style="float:right;">


     <br>
     <br>

<br>
<br>
<br>
<br>
<br>
<input type='hidden' name='ido'  value=<?php echo $idproducer; ?>>
 
		<div align ='center' colspan='6' >
		<input type='submit' name='submit' value='submit' ></div>
		
		</form>
		

    </div>
                    </div> 
                        
                        <div class="col-lg-4">
                            
                            
                            <div class="image" style="  hight:150px; width:450px; float:center; margin:20px; display: inline-block; ">
                <img src="../images/<?php echo $idproducer;?>.jpg " onerror="../images/<?php echo $idproducer;?>.png"  alt='this.src="../images/missing.jpg"' onerror='this.src="../images/missing.png";'  style="width:100%; height:100%; object-fit: contain"/>                        
                 </div>
                            
                        </div>
                    </div>
                </div>

                

<br>
<br>
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
