<?php
$name = $_GET['uname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Set a background color for better visibility */
        }

        header {
            text-align: center;
        }

        h1.logo {
            color: #333; /* Set the color to white */
            font-size: 36px; /* Set the font size to a larger value */
        }

        h2.car-wash {
            color: white; /* Set the color to white */
            font-size: 48px; /* Set the font size to a larger value */
            margin-top: 20px; /* Add some top margin for spacing */
            text-align: center; /* Center the text */
        }

        nav {
            float: right; /* Float the navigation to the right */
            margin-right: 20px; /* Add some right margin for spacing */
        }

        .nav__links {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav__links li {
            display: inline-block;
            margin-left: 10px; /* Add left margin between the links */
        }

        .nav__links a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        /* Change font color for specific links */
        .nav__links a[href="#about"] {
            color: red; /* Change the color for 'About' */
        }

        .nav__links a[href="#services"] {
            color: blue; /* Change the color for 'Services' */
        }

        .nav__links a[href="#projects"] {
            color: green; /* Change the color for 'Projects' */
        }
    </style>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <h1 class="logo">
            <?php echo $name ?>
        </h1>
    </header>
    <h2 class="car-wash">Car Wash</h2> <!-- Added styling for "Car Wash" heading -->
    <nav>
        <ul class="nav__links">
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#services">Services</a>
            </li>
            <li>
                <a href="#projects">Projects</a>
            </li>
        </ul>
    </nav>
    <a href="#" class="cta">
        <button>CONTACT</button>
    </a>
</body>
</html>
