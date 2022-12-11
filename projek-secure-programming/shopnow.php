<?php
require_once('sessionvalidity.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <link rel="stylesheet" href="shopnow.css">
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="Images/Original.jpg">
                        <div>
                            <p>
                                Soju Original
                            </p>
                            <small>
                                Rp.99.000
                            </small>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp.99.000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="Images/Original.jpg">
                        <div>
                            <p>
                                Soju Grape
                            </p>
                            <small>
                                Rp.119.000
                            </small>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp.119.000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="Images/Original.jpg">
                        <div>
                            <p>
                                Soju Peach
                            </p>
                            <small>
                                Rp.119.000
                            </small>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp.119.000</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rp.337.000</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Rp.20.000</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rp.357.000</td>
                </tr>
            </table>
            <div class="Order-box">
                <tr>
                    <a href="thankyou.php">
                    <button>Order</button>
                </tr>
            </div>
        </div>
    </div>
</body>
</html>