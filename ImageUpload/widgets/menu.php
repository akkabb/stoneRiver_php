<a href ="imageUpload.php">Home</a>
<?php
if (!logged_in()) {
?>
<a href ="register.php">Register</a>
<?php
} else{
?>
<a href="logout.php">Log out</a>
<?php
}
?>