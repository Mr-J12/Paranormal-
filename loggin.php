<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
      event.preventDefault();
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      if (username !== "correctUsername" || password !== "correctPassword") {
        document.getElementById("errorMessage").style.visibility = "visible";
      } else {  
        document.getElementById("errorMessage").style.visibility = "hidden";
        this.submit();
      }
    });
  </script>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.error {
    visibility: hidden;
    color: red;
    text-align: center;
  }
.wrapper{
    width: 420px;
    background: transparent;
    border: 3px solid rgba(250, 250, 250, 0.715);
    color: #ffff;
    border-radius: 10px;
    padding: 30px 40px;
}
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.wrapper .input-box{
    width: 100%;
    height: 50px;
    margin: 30px 0;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255,255,255,.2);
    border-radius: 40px;
    font-size: 16px;
    color: #ffff;
    padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
    color: #ffff;
}
.input-box i{
    position: relative;
    left: 300px;
    bottom: 25px;
    transform: translateY(-50%);
    font-size: 20px;
}
.wrapper .remember-forget{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: 15px 0 15px;
}
.remember-forget label input{
    accent-color: #ffff;
    margin-right: 3px;
}
.remember-forget a{
    color: #ffff;
    text-decoration: none;
}
.remember-forget a:hover{
    text-decoration: underline;
}
.wrapper .btn{
    width: 100%;
    height: 45px;
    background: #ffff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0,0,0,.1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}
.wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin-top: 20px; 
}
.register-link p a{
    color: #ffff;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}
.backvid{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}
@media (min-aspect-ratio: 16/9){
    .backvid{
        width: 100%;
        height: auto;
    }
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{
  -webkit-appearance: none;
  margin: 0;
}
    </style>
</head>
<body>
   <div class="wrapper">
    <video autoplay loop muted class="backvid" src="v1.mp4"> 
    </video>
    <form action="checking.php" method="post" id="loginForm">
        <h1>
            Login
        </h1>
        <div class="input-box">
            <input type="text" placeholder="username" name="username"  id="username">
            <i class='bx bx-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="password" name="password" id="password" required>
            <i class='bx bx-lock-alt'></i>
        </div>
        <p class="error" id="errorMessage" >Invalid Username or Password.</p>
        <button type="submit" class="btn"> Login </button>
    <div class="register-link">
        <p> Don't have an account? <a href="siggn.php"> Sign up </a> </p>
    </div>
    </form>
   </div>
</body>
</html>