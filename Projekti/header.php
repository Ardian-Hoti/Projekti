<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://kit.fontawesome.com/dd8c49730d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="register.js"></script>
</head>
<header class="header">
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Logo" width="150px" height="40px"></a>
    </div>
    <button class="button" id="buton" data-modal="modalOne">Log in</button>
    <div id="modalOne" class="modal">
        <div class="containerr" id="containerr">
            <div class="form-containerr sign-up-containerr">
                <form class="registerForm" onsubmit="return register()" method="POST" name="NAME">
                    <h1>Create Account</h1>
                    <div class="social-containerr">
                        <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/" class="social"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/" class="social"><i class="fab fa-instagram"></i></a>
                    </div>
                    <span>Create an account for free </span>
                    <input id="name" type="text" placeholder="Name"/>
                    <input id="email" type="text" placeholder="Email"/>
                    <input id="password" type="password" placeholder="Password"/>
                    <button type="submit" class="buton" value="Send Form">Register</button>
                </form>
            </div>
            <div class="form-containerr sign-in-containerr">
                <form class="loginForm" onsubmit="return login()">
                    <h1>Log In</h1>
                    <div class="social-containerr">
                        <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/" class="social"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/" class="social"><i class="fab fa-instagram"></i></a>
                    </div>
                    <span>Already have account ? </span>
                    <input id="emaill" type="email" placeholder="Email"/>
                    <input id="passwordd" type="password" placeholder="Password"/>
                    <button type="submit" class="buton" value="Send Form">Log In</button>
                </form>
            </div>

            <div class="overlay-containerr">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Log in</h1>
                        <p class="modalp"> If you already have account please login to keep connected with us</p>
                        <button class="ghost" id="signIn">Log In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Create Account</h1>
                        <p class="modalp">Don't have account ? Please register with your personal details to connect with us ! </p>
                        <button class="ghost" id="signUp">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <div class="apc">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
        <a href="services.php">Services</a>
        <a href="cart.php" class="cart">🛒</a>
        <a href="logout.php">Logout</a>
    </div>
</header>
<body>
    
<script src="main.js"></script>
</body>
</html>
