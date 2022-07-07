<?php
   include('session.php');
    $val=null;
    $lid=null;
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
<?php
                         
if(isset($_POST['givea'])&&!isset($_POST['submit']))
	{
	 $lid=0;    
	    $n = $_POST['namee'];
	    $r= $_POST['rec'];
		$p = $_POST['pr'];
		 
		
		
	
		
		
		$queryc = "INSERT INTO giveaway( name, recip,purpose) VALUES ( '$n','$r','$p')";
	if(mysqli_query($conn,$queryc))
		{
            $lid = $conn->insert_id;
                }
                
        }
else if(isset($_POST['submit']))
	{
	
		$lid =$_POST['lid'];
		$nm = $_POST['name'];
		$p=$_POST['prp'];
		$re=$_POST['re'];
		 $idg=$lid;
		
		$sql= "UPDATE giveaway SET name='$nm',recip='$re',purpose='$p' where id='$idg'";
		mysqli_query($conn,$sql);
	$iid= $_POST['item'];
                 
        if($iid!=null)
        {
                 
                 $sql1 = "select * from producer where id =".$iid;
                 $result1 = mysqli_query($conn, $sql1) or die("Error in Selecting " . mysqli_error($conn));
                 $row = mysqli_fetch_array($result1);

		$dn = $row['name'];
	        $iq= $row['quantity'];
                
		$dq = $_POST['qt'];
                 $fkg=$lid;
                if($iq>=$dq)
                {
                $nq=$iq-$dq;
                $sqli= "UPDATE producer SET quantity='$nq' where id='$iid'";
		mysqli_query($conn,$sqli);
                
                $queryc = "INSERT INTO dispatch( i_id, d_name,d_qty,fk_ga) VALUES ( '$iid','$dn','$dq', '$fkg')";
	if(mysqli_query($conn,$queryc))
		{
			 
			 
   		
	}	 
		
 
		
	if(mysqli_query($conn,$sql) )
		{
		 
   }
                }
 else {
     ?>
    <script>
    document.getElementById('mail').innerHTML = "Not enogh Stock";
</script>
<?php
 }
		
                 
                 
		
		
	
		
        }	
		
			
	}
	 

               

 
?> 
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: white; ">
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
              


<?php
 


$idgive = null;
 if($lid!=null)
 {
$idgive = $lid;



$sql3 = "select * from giveaway where id =".$lid;
$result3 = mysqli_query($conn, $sql3) or die("Error in Selecting " . mysqli_error($conn));

 

while ($row = mysqli_fetch_array($result3)) {
	 
        $name = $row['name']; 
        $rcp = $row['recip']; 
	$pur = $row['purpose'];
        
}
 }
 else {
     $name = null; 
        $rcp = null; 
	$pur = null;
}

?>




                        <div class="col-lg-4">
                        <form enctype="multipart/form-data"  action="additems.php" method="post">
Name:  <input type="text" name="name" style="float:right;" value="<?php echo $name; ?>" required="required">

<br>
<br>
Recipient:  <input type="text" name="re" style="float:right;" value="<?php echo $rcp; ?>" required="required">

<br>
<br>

Purpose:  <input type="text" name="prp" style="float:right;" value="<?php echo $pur; ?>" required="required">
<br>
<br>
 <br>
<br> 
 <?php
if($lid!=null)
 {
    ?>

ITEMS SELECTED:-
    
<br>
<br>
 <?php
     
    $sqli = "SELECT * FROM dispatch where fk_ga=".$lid;
    $result = mysqli_query($conn, $sqli) or die("Error in Selecting " . mysqli_error($conn));
    while($data1 = mysqli_fetch_array($result))
        echo  $data1['d_name'].': <input type="text" name="p" style="float:right;" value="'.$data1['d_qty'].'" required="required"></br></br>' ;
 }
    ?>
 <br>
<br>

Item: <select name="item"  style="float:right;">
  <?php
  $cnt=0;
     echo '<option value="null">Select</option>';
    $sqli = "SELECT * FROM producer ";
    $result = mysqli_query($conn, $sqli) or die("Error in Selecting " . mysqli_error($conn));
    while(($data = mysqli_fetch_array($result))&&$cnt<=5)
    {
        $cnt++;
        echo '<option value="', $data['id'],'">', $data['name'],'</option>';
    }
                ?>
</select> <br><br>
Quantity:  <input type="text" id="mail" value="<?php echo $val; ?>" name="qt" style="float:right;" required="required">
      
      
<br>
<br>
 

 


<br>
<br>

<div align ='center' colspan='6' >
     <input type='hidden' name='lid' value="<?php echo $lid; ?>">
		<input type='submit' name='submit' value='ADD' style="background-color: lightblue; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;"></div>
		
		</form>
		<br>
<br><br>
 
<br>
<form>
    <input type="button" class='buttond' value="Done" onclick="window.location.href='giveaway.php'" style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px; 
    float:right;"/>
</form>
                            
		<br>
<br><br>
<br><br>
<br><br>
<br>
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
