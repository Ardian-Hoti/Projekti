<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css"
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://kit.fontawesome.com/dd8c49730d.js" crossorigin="anonymous"></script>
    <script src="register.js"></script>
</head>
<body>
    <img src="img/mbb.jpg" alt="">
<div id="modalOne" class="modal">
        <div class="containerr" id="containerr">
            <div class="form-containerr sign-up-containerr">
                <form class="registerForm" onsubmit="return register()" method="POST" name="submit">
                    <h1>Create Account</h1>
                    <div class="social-containerr">
                        <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/" class="social"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/" class="social"><i class="fab fa-instagram"></i></a>
                    </div>
                    <span id="span"> Create an account for free </span>
                    <input id="name" type="text" placeholder="Name"/>
                    <p id="nameerror" class="text-danger font-weight-bold" style="margin: 0"></p>
                    <input id="email" type="text" placeholder="Email"/>
                    <p id="emailerror" class="text-danger font-weight-bold" style="margin: 0"></p>
                    <input id="password" type="password" placeholder="Password"/>
                    <p id="passworderror" class="text-danger font-weight-bold" style="margin: 0"></p>
                    <button type="submit" class="buton" value="Send Form">Register</button>
                </form>
            </div>
            <div class="form-containerr sign-in-containerr">
                <form class="loginForm"  method="POST" action="validation.php">
                    <h1>Log In</h1>
                    <div class="social-containerr">
                        <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/" class="social"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/" class="social"><i class="fab fa-instagram"></i></a>
                    </div>
                    <span id="span">Already have account ? </span>
                    <input id="emaill" type="email" placeholder="Email" name="email"/>
                    <p id="emaillerror" class="text-danger font-weight-bold" style="margin: 0"></p>
                    <input id="passwordd" type="password" placeholder="Password" name="password"/>
                    <p id="passwordderror" class="text-danger font-weight-bold" style="margin: 0"></p>
                    <button type="submit" class="buton" value="Send Form" name="submit">Log In</button>
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
    
    <script src="loginmain.js"></script>
</body>
</html>