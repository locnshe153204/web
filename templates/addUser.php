<?php require_once "header.php"; ?>
<div>
<h1>REGISTER</h1>
<p>Already have account? <a href="login.php">Login here</a></p>
<form  action="?action=doAdd" method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="text" name="fullname" placeholder="Fullname">
  <input type="text" name="emails" placeholder="Emails">
  <input type="text" name="phone" placeholder="Phone">
  <button type="submit" name="submit">REGISTER</button>
</form>
</div>

<?php require_once "footer.php"; ?>
