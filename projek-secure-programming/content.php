<?php
require_once('sessionvalidity.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="content.css">
</head>
<body>
    <div class="navigation">
        <header>
            <div class="wrapper">
                <nav>
                    <ul>
                        <li><a href="content.php">Home</a></li>
                        <li><a href="editprofile.php">Profile</a></li>
                        <li><a href="shopnow.php">Shop now</a></li>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <div class="main-page">
        <div id="primary-content">
            <div class="wrapper">
                <article>
                    <h3>AllCoolHole</h3>
                    <p>Getting drunk is the only time when people are trully honest. Which is why, we are here to bring the highest product quality for you to raise the potential of your friendship.</p>
                        <img src="Images/soju.jpeg" alt="Image" style="height:400px; width:800px;">
                    </a>
                </article>
            </div>
        </div>
    </div>
    <footer>
        <div class="wrapper">
            <div id="footer-info">
                <p>Copyright 2022 AllCoolHole. All rights reserved.</p>
            </div>
            <div id="footer-links">
                <ul>
                    <li><h5>Company</h5></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </footer>
</body>
</html>