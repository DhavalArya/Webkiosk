<?php
require_once 'Includes/header.php';
?>

<div>
    <h1>Register</h1>
    <p> Already have an account? <a href="login.php">Login!</a></p>

    <form action="Includes/register-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="confirmPassword" placeholder="Confirm Password">
        <button type="submit" name="submit">REGISTER</button>
    </form>
</div>

<?php
require_once 'Includes/footer.php';
?>