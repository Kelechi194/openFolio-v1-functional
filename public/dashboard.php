<?php 

include "middleware.php" ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <div class="navbar">
        <div class="navlinks">
            <ul class="active">
                <li><a href="">profile</a></li>
                <li><a href="">skills</a></li>
                <li><a href="">certificatins</a></li>
                <li><a href="">project</a></li>
                <li><a href="">logout</a></li>

            </ul>
        </div>
    </div>
    <h1>Welcome</h1>
    

    <?php 

    include "../includes/list_sills.php";
    include "../includes/list_projects.php";

    ?>
</body>
</html>