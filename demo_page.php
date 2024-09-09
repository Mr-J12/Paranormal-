<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonology</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">   
    <script>
        function scrollDown() {
          const element = document.getElementById('reach');
          element.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      </script>
<style>
    *{
    padding: 0%;
    margin: 0%;
    box-sizing: border-box;
}
header{
    width: 100%;
    height: 100vh;
    background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)), url('par.jpg');
    background-size: cover;
}
nav{
    width: 100%;
    height: 100%;
    color: greenyellow;
    display: flex;
    justify-content: space-around;
    padding-top: 30px;
}
.logo{
    font-size: 25px;
    color: red;
    letter-spacing: 2px;
    font-family: 'Courier New', Courier, monospace;
}
.menu a{
    text-decoration: none;
    color: white;
    padding: 10px 20px 30px;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    padding-top: 10px;
    position: relative;
    padding: 0 10px;
    font-size: 30px;
}
.menu a:after{
    content: "";
    position: absolute;
    background-color: rgb(255, 47, 47);
    height: 3px;
    width: 0;
    left: 0;
    bottom: -10px;
    transition: 0.4s linear;
}
.menu a:hover{
    color: white;
}
.menu a:hover:after{
    width: 100%;
}
.contact a{
    color: white;
    padding-top: 10px;
    padding: 10px 20px;
    font-size: 25px;
    color: rgb(255, 0, 0);
    font-family:'Courier New', Courier, monospace;
}
.h-text{
    max-width: 650px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    color: white;
}
.h-text span{
    letter-spacing: 5px;
    font-size: 25px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.h-text h1{
    font-size: 5.5em;
    font-family: 'Courier New', Courier, monospace;
    padding-bottom: 20px;
}
h2{
	margin-top: 1.5%;
	font-family: Verdana, Arial, sans-serif;
	color: rgb(158, 0, 0);
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
#scrollButton {
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    padding: 10px 20px;
    border: none;
    color: #c90000;
    cursor: pointer;
    padding-right: 20px;
    transition: .5s;
    overflow: hidden;
    background-color: transparent;
    font-size: large;
}
#scrollbutton::before{
    color: rgb(158, 0, 0);
    overflow: hidden;
    transition: 1s ease-in-out;
}
#scrollbutton:hover::before{
    width: 100%;
    filter: drop-shadow(0 0 25px rgb(158,0,0));
}
.deta{
    text-align: left;
    background-color: black;
    padding-bottom: 20px;
    font-size:x-large; 
    font-family: 'Courier New', Courier, monospace;
}
.deta p{
    color: #fff;
}
.content{
    background-color: #000;
    color: white;
    font-family: 'Courier New', Courier, monospace;
    text-align: center;
    letter-spacing: 2px;
}
.content h2{
    font-size: 80px;
    padding-top: 20px;
    text-decoration: underline;
}
table{
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    font-size: 30px;
}
.content p{
    font-size: 25px;
    padding-top: 10px;
}
.content h3{
    font-size: 50px;
    color: #c90000;
    font-family: 'Courier New', Courier, monospace;
    padding-top: 5%;
    padding-bottom: 3%;
}
a{
    color: red;
}
footer{
    background-color: #111;
}
.footerContainer{
    width: 100%;
    padding: 35px 30px 20px ;
}
.footerContainer p{
    text-align: center;
    font-size: 30px;
}
.socialIcons{
    display: flex;
    justify-content: center;
}
.socialIcons a{
    text-decoration: none;
    padding:  10px;
    background-color: white;
    margin: 10px;
    border-radius: 50%;
}
.socialIcons a i{
    font-size: 2em;
    color: black;
    opacity: 0,9;
}
.socialIcons a:hover{
    background-color: #111;
    transition: 0.5s;
}
.socialIcons a:hover i{
    color: white;
    transition: 0.5s;
}
.footerBottom{
    background-color: #000;
    padding: 20px;
    text-align: center;
}
.footerBottom p{
    color: white;
}
.designer{
    opacity: 0.5;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    margin: 0px 5px;
}
@media (max-width: 700px){
    .socialIcons a{
        padding: 8px;
        margin: 4px;
    }
}
</style>
</head>
<body>
    <video loop autoplay muted class="backvid">
        <source src="mgr.mp4" type="video/mp4">
        <source src="mgr.webm" type="video/webm">
        <source src="mgr.ogg" type="video/ogg"> 
       </video>
    <header>
        <nav>
            <div class="logo">
               Paranormal<br>Blog
            </div>
            <div class="menu">
                <a href="home_page.php">Home</a>
                <a href="demo_page.php">Demonology</a>
                <a href="stories_page.php">Stories</a>
                <a href="rl_page.php">RL Incidents</a>
            </div>
            <div class="contact">
                <a href="feedback.php">Feedback</a>
            </div>
            </nav>
    <section class="h-text">
        <h1>
       Demonology
        </h1>
        <button id="scrollButton" onclick="scrollDown()">Click To Explore</button>
       </section>
       <div id="reach">
        <div class="deta">
            <br><br>
<div class="content"> 
<h2>Pseudomonarchia Daemonum</h2>
<p>
Pseudomonarchia Daemonum, or False Monarchy of Demons, first appears as an Appendix to De praestigiis daemonum (1577) by Johann Weyer. An abridgment of a grimoire similar in nature to the Ars Goetia (first book of The Lesser Key of Solomon), it contains a list of demons, and the appropriate hours and rituals to conjure <br>
The Pseudomonarchia predates, and differs somewhat from, Ars Goetia. The Pseudomonarchia lists sixty-nine demons in contrast to the later seventy-two, and their sequence varies, along with some of their characteristics. The demon Pruflas appears only in Pseudomonarchia and Pseudomonarchia does not attribute any sigils to the demons.<br>
Weyer referred to his source manuscript as Liber officiorum spirituum, seu Liber dictus Empto. Salomonis, de principibus et regibus daemoniorum. Book of the offices of spirits, or the book called 'Empto'. Solomon, concerning the princes and kings of demons.<br>This work is likely related to a very similar 1583 manuscript titled The Office of Spirits both of which appear ultimately be an elaboration on a fifteenth-century manuscript titled Le Livre des Esperitz (of which 30 of its 47 spirits are nearly identical to spirits in the Ars Goetia).<br>
</p>
<h3>Types of Demon Under their Monarchy</h3>
<table width="1096" height="519" border="5" class="glo">
    <tr>
      <td width="201"><div align="center"><strong><a href="warcon.php">War <br>and <br> Conflict </strong></div></td>
      <td width="263"><div align="center"><strong><a href="descao.php">Destruction <br>and <br>Chaos </strong></div></td>
      <td width="194"><div align="center"><strong><a href="knowdiv.php">Knowledge <br> and <br> Divination </strong></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong><a href="weapro.php">Wealth <br> and <br> Prosperity </strong></div></td>
      <td><div align="center"><strong><a href="matr.php">Magic <br> and <br> Transformation </strong></div></td>
      <td><div align="center"><strong><a href="lupa.php">Lust <br> and <br> Passion </strong></div></td>
    </tr>
  </table>
</div>
<br>
<footer>
    <div class="footerContainer">
        <p>For More Information</p><br>
      <div class="socialIcons"> 
        <a href="https://www.facebook.com/search/top?q=paranormal%20witness%20episodes"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/explore/tags/paranormalactivity/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://twitter.com/search?q=paranormal%20investigator&src=typed_query&f=live"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://en.wikipedia.org/wiki/Category:Paranormal_investigators"><i class="fa-brands fa-google-plus"></i></a>
        <a href="https://www.youtube.com/results?search_query=real+paranormal+investigators"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2024<br> Designed by <span class="designer">Yashwant and Chirag</span></p>
    </div>
</footer>
</div>
</div>
</header>
</body>
</html>