<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic and Transformation</title>
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>
    <style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }
        #top{
            background-color: black;
            font-size: 90px;
            color: red;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding-top: 1%;
            width: 100%;
            height: 100%;
            background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0, 0, 0, 0.623)), url('maaaag.jpg');
            background-size: cover;
        }
        .content{
            font-size: 40px;
            color: red;
            text-align: left;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-left: 2%;
        }
        a{
            color: red;
        }
#menu{
   text-align: left;
   padding-left: 2%;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;   
  top: 0;
  left: 0;
  background-color: #111111b9;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #ff0000;
  text-decoration: none;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
            </style>
        </head>
        <body>
            <div id="top">
                Magic and Transformation <br>

                <div id="menu">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
                </div>
                       <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="warcon.php">War and Conflict <br> </a>
                            <a href="descao.php">Destruction and Chaos <br> </a>
                            <a href="knowdiv.php">Knowledge and Divination <br> </a>
                            <a href="weapro.php">Wealth and Prosperity <br> </a>
                            <a href="matr.php">Magic and Transformation <br> </a>
                            <a href="lupa.php">Lust and Passion <br> </a>
                       </div> 
            
        <div class="content">
       
        <a href="matr1.php">Amy, Avnas (President) <br><br> </a>
        
        <a href="matr2.php">Bathin, Bathym, Mathim, Marthim (Duke) <br><br></a>
            
        <a href="matr3.php">Buer (President) <br><br> </a>
            
        <a href="matr4.php">Decarabia, Carabia (Marquis) <br><br></a>
            
        <a href="matr5.php">Foras (President) <br><br></a>

        </div>
        </div>
</body>
</html>