function register(){
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    
    var namecheck = /^[A-Z]{1}[A-Za-z. ]{3,30}$/ ;
    var emailcheck = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,7}$/ ;
    var passwordcheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,40}$/;
  
    if(namecheck.test(name)){
      document.getElementById('nameerror').innerHTML = " ";
    }else {
      document.getElementById('nameerror').innerHTML = "Name is invalid Example: Name";
    return false;
    }
  
    if(emailcheck.test(email)){
      document.getElementById('emailerror').innerHTML = " ";
    }else {
    document.getElementById('emailerror').innerHTML = "Email is invalid Example: email@example.com";
    return false;
    }
  
    if(passwordcheck.test(password)){
      document.getElementById('passworderror').innerHTML = " ";
    }else {
    document.getElementById('passworderror').innerHTML = "Please enter a strong paswword";
    return false;
    }
  }

  // function login(){
  //   var emaill=document.getElementById("emaill").value;
  //   var passwordd=document.getElementById("passwordd").value;

  //   if(emailcheck.test(emaill)){
  //       document.getElementById('emaillerror').innerHTML = " ";
  //     }else {
  //     document.getElementById('emaillerror').innerHTML = "Email is incorrect.Check again ";
  //     return false;
  //     }
    
  //     if(passwordcheck.test(passwordd)){
  //       document.getElementById('passwordderror').innerHTML = " ";
  //     }else {
  //     document.getElementById('passwordderror').innerHTML = "Password is incorrect ";
  //     return false;
  //     }
  // }