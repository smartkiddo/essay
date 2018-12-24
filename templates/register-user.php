<?php include 'inc/header.php'; ?>
<h4>Sign up</h4>
        <form action="index.php?register" method="POST">
    <div class="form-group">
     
      <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name">
    </div>
    <div class="form-group">
     
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
    </div>
    <div class="form-group">
     
      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary btn-block" name="register" value="Register">Continue to paper details</button>
  </form>



<?php include 'inc/footer.php'; ?>