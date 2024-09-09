<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sign up</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

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
    <form action="making.php" method="post">
        <h1>
           Sign up
        </h1>
        <div class="input-box">
            <input type="text" placeholder="username" name="username" required>
            
        </div>
        <div class="input-box">
            <input type="email" placeholder="email" name="email" required>
            
        </div>
        <div class="input-box">
            <input type="password" placeholder="password" name="password" >
        </div>
        <div class="input-box">
            <input type="number" placeholder="Phone No" name="phoneno" maxlength="10">
        </div>
        <button type="submit" class="btn"> Register </button>
    <div class="register-link">
        <p> Having an account? <a href="loggin.php"> Login </a> </p>
    </div>
    </form>
   </div>
</body>
</html>
