<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Real Life Incidents </title>
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
    background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2));
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
img {
	max-width: 650px;
	margin: 2%;
	display: flex;
	float: left;
	border: 3px solid rgb(255, 255, 255);
	border-radius: 10px;
	size: 60px;
	width: 500px;
	height: 350px; 
}
.deta{
    text-align: left;
    background-color: black;
    padding-bottom: 20px;
    font-size:x-large;
    font-family: 'Courier New', Courier, monospace;
    color: #ffffff;
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
        <source src="rlll.mp4" type="video/mp4">
        <source src="rlll.webm" type="video/webm">
        <source src="rlll.ogg" type="video/ogg"> 
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
                <a href="get_in_touch.php">Get in Touch</a>
            </div>
            </nav>
    <section class="h-text">
        <h1>
       Real-Life Incidents
        </h1>
        <button id="scrollButton" onclick="scrollDown()">Click To Explore</button>
       </section>
       <div id="reach">
       <div class="deta">
        <br><br>
            <img src="ba5e6c469643651b8c491591e1d49aae--the--horror.jpg">
            <h2>The Enfield Monster</h2>
            <p>In 1973, a man in Enfield, Illinois told reporters that he saw a weird little creature lurking in his yard. Per the Mt. Vernon Register-News, resident Henry McDaniel stated:

                It had three legs on it, a short body, two little short arms, and two pink eyes as big as flashlights.
                The police later found scratches on the door screen and footprints that looked like a dogs but with six toes. 
                "If they do find it,” McDaniel said in the newspaper, "they will find more than one and they won’t be from this planet, I can tell you that.” To this day, no explanation has ever been found.
                <a href="enfield_monster_page.php">Read More</a></p>
       
       <br><br><br><br><br><br>
       
        <img src="sucidal_hotel.jpg">
        <h2>The Suicide Hotel</h2>
        <p>In Colombia, the Hotel Del Salto has more stories as one of the most haunted places on Earth more than it does actual tenants. Turned into a museum, the hotel was designed by designed by architect Carlos Arturo Tapias back in 1923, overlooking the Tequendama Falls. 
            The views were said to be spectacular, but guests kept getting a little too close to the falls. Translated to "Hotel of the Leap," the Hotel Del Salto is full of stories of people leaping to their deaths. According to local legend, the Indigenous Muisca tribe escaped from Spanish colonizers by leaping off the cliffs.
            <a href="sucidal_hotel_page.php">Read More</a></p>

   
   <br><br><br><br><br>
   
    <img src="axe.jpeg">
    <h2>The Axe Murder House</h2>
    <p>The Villisca Axe Murder House in Villisca, Iowa is a well-known tourist attraction for ghost hunters and horror lovers alike. 
        The site of a gruesome unsolved 1912 murder, in which six children and two adults had their skulls completely crushed by the axe of an unknown perpetrator, was purchased in 1994, restored to its 1912 condition, and converted into a tourist destination. 
        It costs $428 a night to stay at the old haunted home, where visitors always report strange paranormal experiences, such as visions of a man with an axe roaming the halls or the faint screams of children.
        <a href="axe_murder_page.php">Read More</a></p>


<br><br><br><br>

    <img src="doll.jpg">
    <h2>The Haunted Doll</h2>
    <p>When you think of haunted dolls, it’s likely the creepy old Victorian-looking porcelain kind that springs to mind. None of which you probably have laying around. Still, don’t get too comfortable around any kids toys too soon, though: a Disney’s Frozen Elsa doll that was gifted for Christmas 2013 in the Houston area made headlines earlier this year when it seemingly became haunted.
        The family decided to throw the creepy doll out in December of 2019. Weeks later, they found it inside a bench in their living room. “The kids insisted they didn’t put it there, and I believed them.
        <a href="haunted_doll_page.php">Read More</a></p>


<br><br><br><br>

    <img src="exorcism.jpg">
    <h2>A Deadly Exorcism</h2>
    <p>In August 2016 in North London, 26-year-old Kennedy Ife began acting strange and aggressive following a pain in his throat. 
        He reportedly bit his father, threatened to cut off his own penis, and complained of a python or snake inside of him before his family restrained him to a bed with cable ties and excessive force.
        Kennedy Ife had been bound to his bed for three days without medical attention when his brother called emergency services, explaining that Kennedy Ife was complaining of dehydration. He appeared to have developed breathing issues, and was pronounced dead at 10:17 a.m.
        <a href="exorcism_page.php">Read More</a></p>
        
<br><br><br><br>
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