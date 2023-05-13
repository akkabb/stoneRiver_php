<?php
    $title = 'Build a Non-database Photo Album, plus LightBox';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once'include/head.php'?>
</head>
<body>
    <h1>Build a Non-database Photo Album, plus LightBox</h1>
    <main class="photoAlbum">
        <table width="600" align="center" border="0" cellpadding="10" bgcolor="EFEFEF">
            <tr>
                <td>
                    <?php include 'album.php'; ?>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>