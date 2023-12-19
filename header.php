<?php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modest - Sign Up</title>
    <link rel="stylesheet" href="./css/modest_login.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo"><img src="img/modest life logo new.png" alt="" height="60px"></div>
            <div class="logo_text">
                <P>Modest Life</P>
            </div>
            <div class="nav_list">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="services"><a href="#">Services</a>
                        <ul class="dropdown">
                            <li class="product"><a href="#">Products</a>
                                <ul class="product_dropdown">
                                    <li><a href="#">Deep Sea</a></li>
                                    <li><a href="#">Sunny Orange</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Values</a></li>
                        </ul>
                    </li>
                    <li class="login_btn" style="z-index:5;"><a href="#">Login</a></li>
                </ul>
            </div>
            <div class="menu">
                <label for="chkmenu"><img src="img/menu (1).png" alt="" width="35px"></label>
                <input type="checkbox" id="chkmenu">
                <ul class="sidebar">
                    <li class="mini_product" id="product_btn"><a href="#">Products</a>
                        <ul class="product_mini_dropdown">
                            <li><a href="#">Deep Sea</a></li>
                            <li><a href="#">Sunny Orange</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About Us</a></li>
                    <li class="login_btn"><a href="#">Login</a></li>
                </ul>
                <!-- <img src="img/menu (1).png" alt="" width="35px"> -->
            </div>
        </nav>
    </header>

?>