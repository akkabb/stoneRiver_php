<?php
$title = "register.php";
require_once('init.php');
require_once('include/header.php');
?>

<h3>Register</h3>
<?php
    if( isset($_POST['register_email'], $_POST['register_name'], $_POST['register_password'])){
        $register_email = $_POST['register_email'];
        $register_name = $_POST['register_name'];
        $register_password = $_POST['register_password'];

        $errors = array();

        if (empty($register_email) || empty($register_name) || empty($register_password)) {
            $errors[] = "All fields are required";
        } else {
            if(filter_var($register_email, FILTER_VALIDATE_EMAIL) === false) {
                $errors[] = 'Email address not valid';
            }
            if (strlen($register_email) > 255 || strlen($register_name) > 35 || strlen($register_password) > 35) {
                $errors[] = 'One or more fields contains too many characters';
            }
            if (user_exists($register_email)) {
                $errors[] = 'That email has already been registered';
            }
        }
        if (!empty($errors)){
            foreach ($errors as $error) {
                echo $error . '<br>';
            } 
        } else {

        }
        // print_r($errors);
    }
?>
<form action="" method="post">
    <p>Email: <br><input type="email" name="register_email" size="35" maxlength="255"></p>
    <p>Full name: <br><input type="text" name="register_name" maxlength="35"></p>
    <p>Password: <br><input type="password" name="register_password" maxlength="35"></p>
    <p><input type="submit" value="Register"><p>
</form>

<?php
require_once('include/footer.php');
?>