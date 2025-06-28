<?php include('../header.php'); ?>

<section class="auth-container">
  <div class="form-box">
    <h2>Create Your Account</h2>
    <form action="signup_handler.php" method="POST">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Sign Up</button>
    </form>
    <p class="switch-link">Already have an account? <a href="login.php">Login here</a></p>
  </div>
</section>

<?php include('../footer.php'); ?>
