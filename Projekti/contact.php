<?php include'formtoemail.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <script src="contact.js"></script>
</head>
<body class="bodyy">
    <?php include'header.php'?>
    <div class="div1">
    <div class="kontainer">
      <div class="contactinfo">
        <div>
          <h2 class="h2">Contact Info</h2>
          <ul class="info">
            <li>
              <span><img src="img/location.png" alt="1"></span>
              <span>Lorem ipsum dolor<br>
                sit amet consectetur.<br>
                lorem</span>
            </li>
            <li>
              <span><img src="img/mail.png" alt="2"></span>
              <span>info@xtreme.com</span>
            </li>
            <li>
              <span><img src="img/call.png" alt="3"></span>
              <span>+0123456789</span>
            </li>
          </ul>
        </div>
        <ul class="sci">
          <li><a href="https://www.facebook.com"><img src="img/1.png" alt="5"></a></li>
          <li><a href="https://www.twitter.com"><img src="img/2.png" alt="4"></a></li>
          <li><a href="https://www.instagram.com"><img src="img/3.png" alt="3"></a></li>
          <li><a href="https://www.linkedin.com"><img src="img/5.png" alt="1"></a></li>
        </ul>
      </div>
      <form class="contactForm" onsubmit="return validate()">
        <h2 class="h2">Send a Message</h2>
        <div class="formBox">
          <div class="inputBox w50">
            <input type="text" name=""  id="username">
            <span class="span">First Name</span>
            <p id="usererror" class="text-danger font-weight-bold"></p>
          </div>
          <div class="inputBox w50">
            <input type="text" name=""  id="lastname">
            <span class="span">Last Name</span>
            <p id="lastnameerror" class="text-danger font-weight-bold"></p>
          </div>
          <div class="inputBox w50">
            <input type="text" name=""  id="email">
            <span class="span">Email Addres</span>
            <p id="emailerror" class="text-danger font-weight-bold"></p>
          </div>
          <div class="inputBox w50">
            <input type="number" name=""  id="number">
            <span class="span">Mobile Number</span>
            <p id="numbererror" class="text-danger font-weight-bold"></p>
          </div>
          <div class="inputBox w100">
            <textarea  name="" id="textarea"></textarea>
            <span class="span">Write your Message here...</span>
            <p id="arearerror" class="text-danger font-weight-bold"></p>
          </div>
          <div class="inputBox w100">
            <button type="submit" >Send</button>
          </div>
          <div>
          </div>
        </div>
      </form>
    </div>
  </div>
    <?php include'footer.php'?>
</body>
</html>