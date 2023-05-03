
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php'); ?>
    <link rel="stylesheet" href="../CSS/Getstyle.css">
</head>
<body>
    <h2><a href="basics_section.php">Back To Basics</a></h2>
    <main class="main_postPage">
        <form action="process.php" method="POST">
            <div class="nameIput">
                <p><input type="checkbox" name="agree" value="true">
                I agree with Terms & Conditions</p>
            </div>
            <input type="submit" value="Register">
        </form>
    </main>
</body>
</html>