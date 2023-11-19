<?php 
session_start();
session_unset();
session_destroy();
?>

<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/mStyle.css">
   
</head>
<body>
    <div class="row right-content" id="header">
<nav class="navbar">
        <div class="left-content">
            <span class="name">Yara Malaeb</span>
        </div>
</nav>
    <div class="title">
            <h1 style="text-align: center;">Welcome to my Portfolio!</h1>
            <h2 style="text-align: center;">Log In Here</h1>
        </div>
        <div class="row right-content" id="header" style="display:none;">
        <div class="contact"></div>
    </div>

    <div class="container">
    
                <form action="BackEnd/login.php" method="POST" id="login-form">

            <label for="un">Username</label>
            <br>
            <input type="text" name="username" id="un" class="txtfield" onkeypress="checkEnter(event, 'pass')">
            <br>
            <label for="pass">Password</label>
            <br>
            <input type="password" name="password" id="pass" class="txtfield" onkeypress="checkEnter(event, 'login-form')">
            <br>
            <br>
            <input type="button" value="Login" onclick="login()" class="mButton">
            <input type="button" value="Cancel" onclick="ClearForm()" class="mButton">
        </form>


    </div>
    <h1 style="text-align: center;font-size:16px">Don't have an account?</h1>

  
    <a style="font-weight: bold; margin-right: 48%;"  href="pages/signup.html">Sign Up here!</a>
 
    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    .title{
                padding-top: 7%;
            }
            h1{
                font-weight: bold;
                color: #4f1d47;
            }
            .txtfield{
                color: #870073;
                border-radius: 7%;
                border: 2px solid #f4f0f0;
            }
            label{
                color:#4f1d47;
                font-weight: bold;
            }
            .mButton{
                background-color:#870073 ;
                color: #f4f0f0;
                padding: 14px 20px;
                border: none;
                cursor: pointer;
                
                text-align: center;
                }
      }
     
</style>
    <script>
        function login(event) {
            event.preventDefault(); 
    var un = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

        if ((un=="")||(pass=="")){
            alert("You must fill in the username and the password!");
        }else{
            document.getElementById("login-form").submit();
        }

    }
    function ClearForm(){
        document.getElementById("un").value="";
        document.getElementById("pass").value="";
    }
    function checkEnter(event, nextField) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById(nextField).focus();

            if (nextField === 'login-form') {
                login();
            }
        }
    }


document.querySelector("form").addEventListener("submit", login);

    </script>
</body>

</html>
