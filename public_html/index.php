<?php
require 'auth0.php';

// Get the user info - this will handle the
// exchange of the AuthCode for an Identity Token
$userInfo = $auth0->getUser();
?>

<h1>Auth0 Demo for PHP</h1>

<?php if(!$userInfo): ?>

  <a href="login.php">Log In</a>

<?php else: ?>

  <h2>Hi <?php echo ucfirst($userInfo['nickname']) ?>!</h2>
  <p><img src="<?php echo $userInfo['picture'] ?>" width="150" /></p>
  <pre><?php var_export($userInfo) ?></pre>
  <a href="/logout.php">Logout</a>

<?php endif ?>
