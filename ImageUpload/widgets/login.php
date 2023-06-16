<?php
if (logged_in()){
    echo 'Hello!';
}else {
?>

<form action="" method="post">
    <p>
        Email: <input type="email" name="login_email" id="">
        Password: <input type="password" name="login_password" id="">
        <input type="submit" value="Log in">
    </p>
</form>

<?php
}
?>