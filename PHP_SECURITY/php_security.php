<?php
$title = 'PHP security';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <!-- This menu made in CSS only | Made with this link https://www.youtube.com/watch?v=wjkvYWSVpCY -->
    <input type="checkbox" id="active">
    <label for="active"></label>
    <header class="securityHeader">
        <nav class="securityNav">
            <li><a href="cookies.php">Cookies</a></li>
            <li><a href="file_includes.php">File Includes</a></li>
            <li><a href="file_uploading.php">File Uploading</a></li>
            <li><a href="nul_byte.php">Null Byte</a></li>
            <li><a href="passing_variables.php">Passing Variables</a></li>
            <li><a href="session_hijacking.php">Session Hijacking</a></li>
            <li><a href="sql_injection.php">SQL Injection</a></li>
            <li><a href="xss.php">XSS (Cross-Site Scripting)</a></li>
        </nav>
    </header>
</body>
</html>