<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['fosaid']=$ret['ID'];
     echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
    }
    else{
    echo "<script>alert('Invalid Details');</script>";
    }
  }
  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Crave & Crust Bakery System | Admin Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Crave and Crust | Admin Login</h2>

              
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                     
                    <form class="m-t" role="form" action="" method="post" name="login">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="username" name="username" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required="true" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b" name="login">Login</button>

                        <a href="forgot-password.php">
                            <p>Forgot password?</p>
                        </a>

                        
                       
                    </form>
                     <i class="fa fa-home" style="font-size: 30px" aria-hidden="true"></i>
                    <p><a href="../index.php"> Back Home </a></p>
                    
                </div>
            </div>
        </div>
        <hr/>
       
    </div>
<?php include_once('includes/footer.php');?>
</body>

</html>
