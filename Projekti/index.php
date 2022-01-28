<?php session_start(); ?>
<?php
    if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){
        ?>
        <li>Dashboard</li>
        <?php
    }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
</head>
<?php include'header.php'?>
<body class="bodyy">
    <div class="divv1">
        <h2>Welcome to EXTREME</h2>
        <div class="maindiv">
        </div>
    </div>
    <div class="div3">
        <div class="div3-1" id="div3.1">
            <div class="div3img">
                <img src="img/computer.jpg" alt="1">
            </div><a href="#">
                <h4><em>Computers</em></h4>
            </a>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="div3-2">
            <div class="div3img">
                <img src="img/laptop.jpg" alt="2">
            </div>
            <a href="#">
                <h4><em>Laptops</em></h4>
            </a>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="div3-3">
            <div class="div3img">
                <img src="img/parts.png" alt="3">
            </div><a href="#">
                <h4><em>PC/LAPTOPS PARTS</em></h4>
            </a>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <?php include'footer.php'?>
    <script src="main.js"></script>
</body>

</html>