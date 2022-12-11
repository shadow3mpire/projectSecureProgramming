<?php
require_once('sessionvalidity.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        .center {
            display:flex;
            justify-content: center;
            align-items: center;
            height:30px;
        }
        .cart-button {
            background-color: black;
            color: white;
            border: none;
            height: 36px;
            width: 105px;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 8px;
            transition: opacity 0.15s;
            padding-left: 16px;
            padding-right: 16px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <div style="margin-top:100px">
        <div class="center" style="margin-bottom:10px; font-size: 30px;">
            <h1>
                Thank you
            </h1>
        </div>
        <div class="center" style="margin-top:50px; margin-bottom: 50px;">
            <p>
                Please kindly wait for your package to arrive
            </p>
        </div>
        <div class="center">
            <a href="content.php">
                <button class="cart-button">Home</button>
            </a>
        </div>
    </div>

</body>
</html>