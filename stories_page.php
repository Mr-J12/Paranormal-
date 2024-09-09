<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Stories</title>
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
        <source src="hrr.mp4" type="video/mp4">
        <source src="hrr.webm" type="video/webm">
        <source src="hrr.ogg" type="video/ogg"> 
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
                <a href="share_your_story.php">Share Your Story</a>
            </div>
            </nav>
    <section class="h-text">
        <h1>
      Stories
        </h1>
        <button id="scrollButton" onclick="scrollDown()">Click To Explore</button>
       </section>
       <div id="reach">
       <div class="deta">
        <br><br>
        <img src="zodiac.jpg">
        <h2>Zodiac (2007)</h2>
        <p>Anyone with a passing interest in true crime is familiar with the Zodiac Killer, who terrorised San Francisco with a string of still-unsolved murders in the 1960s. But David Fincher’s chilling masterpiece is less about the slayings – though he re-enacts several of them in unnerving detail – than the rabbit hole the killer opened up with the maddening puzzles and coded messages he disseminated through the press. 
            The case fully consumed political cartoonist Robert Graysmith, played by Jake Gyllenhaal, whose decades-long obsession with uncovering the Zodiac’s identity cost him his marriage.
            <a href="zodiac_page.php">Read More</a></p>
   
   <br><br><br><br><br>
   
    <img src="amityville.jpg">
    <h2>The Amityville horror (1979)</h2>
    <p>Driven by a marketing campaign playing up its supposedly truthful bona fides, this haunted house tale became a significant leftfield success during the post-The Exorcist horror boom of the late ‘70s. Based on the book by Jay Anson, it depicts the supernatural harassment experienced by the Lutz family upon moving into an old house in Long Island that had previously been the site of a grisly mass murder. Of course, critics have long dismissed Anson’s book as a hoax, but that didn’t stop the movie from becoming a horror classic.
        <a href="amity_page.php">Read More</a></p>


<br><br><br><br><br>

<img src="conjuring.jpg">
<h2>The Conjuring (2013)</h2>
<p>Ed and Lorraine Warren were semi-famous paranormal investigators before director James Wan decided to turn their most well-known case into a throwback haunted house movie and made them perhaps the most famous ghost hunters in the world. Who else in their field can claim to have inspired the most successful horror franchise of all-time? The so-called ‘Conjuring Universe’ has spun off in several directions now – including the Annabelle movies – but the first film takes its inspiration directly from the Warrens’ account of investigating supernatural activity.
        <a href="conjuring_page.php">Read More</a> </p>


<br><br><br><br><br>

<img src="poltergeist.jpeg">
<h2>Poltergeist (1982)</h2>
<p>Three years after The Amityville Horror, director Tobe Hooper effectively ‘Spielbergised’ the modern haunted house movie – with an assist from Steven Spielberg himself, who produced and possibly, maybe ghost-directed some of it – turning in a horror classic. And like Amityville, it takes inspiration from an actual haunting. In the 1950s, the curious case of the Hermann house in suburban Long Island became a national media story after the family brought in a paranormal investigator to diagnose unusual activity, such as randomly popping bottles and objects moving on their own. 
    <a href="poltergeist_page.php">Read More</a> </p>


<br><br><br><br><br>

<img src="compliance.jpeg">
<h2>Compliance (2012)</h2>
<p>The incident that inspired this indie thriller didn’t end in death or involve any sort of bloodshed, but it is nonetheless deeply disturbing – and not without torture. In 2004, a man claiming to be a police officer called a fast-food restaurant in rural Kentucky and managed to convince the employee who answered to strip search her coworker, the first in a series of rapidly mounting indignities. Craig Zobel’s claustrophobic drama doesn’t exploit the humiliation of what turned out to be an incredibly fucked-up prank call but uses it as a springboard to explore the American fealty to authority.
    <a href="compliance_page.php">Read More</a></p>
<br><br>
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