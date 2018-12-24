<?php if(!isset($_SESSION)) 
    { 
        session_start(); 

    }  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Essay</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>


<body>    
<div class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="index.php" class="navbar-brand">Essay Bay</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            
             <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

            <li class="nav-item"><a class="nav-link" href="index.php?about">About Us</a></li>

            <li class="nav-item"><a class="nav-link" href="index.php?guarantees">Guarantees</a></li>

            <li class="nav-item"><a class="nav-link" href="index.php?services">Our Services</a></li>

            <li class="nav-item"><a class="nav-link" href="index.php?pricing">Pricing</a></li>

            <li class="nav-item"><a class="nav-link" href="index.php?create">Order Now</a></li>
            

            <?php if(isset($_SESSION['user_login']) && $_SESSION['user_login']['login']==true):?>

              <li class="nav-item"><a class="nav-link" href="index.php?messages">Messages</a></li>


            <?php endif;?>
          </ul>

          <ul class="nav navbar-nav ml-auto">


                 
            <?php if(isset($_SESSION['user_login']) && $_SESSION['user_login']['login']==true):?>

           <li class="nav-item"><a class="nav-link" href="index.php?profile">Welcome, <?php echo $_SESSION['user_login']['name']?></a></li>

            <li class="nav-item"><a class="nav-link" href="index.php?logout">Logout</a></li>
          </ul>

          <?php else: ?>

            <li class="nav-item"><a class="nav-link" href="index.php?register">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?login">Login</a></li>

        
        <?php endif;?>

        </div>
      </div>
    </div>


  <div class="container">
	
        
     