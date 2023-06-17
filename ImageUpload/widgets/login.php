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

if (isset($_POST['login_email'], $_POST['login_password'])) {
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];

    $errors = array();

    if (empty($login_email) || empty($login_password)) {
        $errors[] = 'Email and password required';
    } else {
        $login = login_check($login_email, $login_password);

        if ($loggin === false) {
            $errors[] = 'Unable to log you in';
        }
    }

    if (!empty($errors)) {
        foreach($errors as $error){
            echo $error, '<br>';
        }
    } else{
        $_SESSION['user_id'] = $login;
    }
}
?>