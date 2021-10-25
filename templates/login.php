<?php require_once "header.php"; ?>
<div>
<h1>REGISTER</h1>
<p>Don't have account? <a href="regiser.php">Register here</a></p>
<form  action="?action=Login" method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <button type="submit" name="submit">LOGIN</button>
</form>
</div>

<?php require_once "footer.php"; ?>
