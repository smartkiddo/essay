<?php include 'inc/header.php'; ?>
<h1>Login </h1>

        <form action="index.php?login" method="POST">
    <div class="form-group">
     
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
    </div>
        <div class="form-group">
     
      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Login</button>
  </form>


<?php include 'inc/footer.php'; ?>