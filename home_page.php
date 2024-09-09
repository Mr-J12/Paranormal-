<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400..700&family=Nova+Mono&family=Rubik+Scribble&display=swap" rel="stylesheet">
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
    font-family: 'Courier New', Courier, monospace;
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
    color: rgb(158, 0, 0);
    cursor: pointer;
    padding-right: 20px;
    transition: .5s;
    overflow: hidden;
    background-color: transparent;
    font-size: large;
    -webkit-text-stroke: 1px rgb(158, 0, 0);
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
.textin{
    color: #fff;
    font-size: 22px;
}
.deta p{
    color: #fff;
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
.every{
    font-family: 'Courier New', Courier, monospace;
    padding-bottom: 100px;
}
.every .h2{
    padding-top: 100px;
}
.betw{
    float: right; 
    height: 300px;
    width: 450px;
}
.formma{
    font-family: "Nova Mono", monospace;
    color: rgb(255, 255, 255);
    font-size: 25px;
}
.formma em{
    font-size: 35px;
    color: rgb(152, 21, 21);
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
    <video autoplay loop muted class="backvid">
        <source src="gen.mp4" type="video/mp4">
        <source src="gen.webm" type="video/webm">
        <source src="gen.ogg" type="video/ogg"> 
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
                <a href="feedback2.php">Feedback</a>
            </div>
            </nav>
    <section class="h-text">
        <h1>
       Don't Look Back
        </h1>
        <button id="scrollButton" onclick="scrollDown()">Click To Explore</button>
       </section>
        <div id="reach">
        <div class="deta">
            <br><br>
            <center><h2> What is Paranormal Activity </h2></center><br>
        <div class="textin">
            <p>
                Paranormal events are purported phenomena described in popular culture, folk, and other non-scientific bodies of knowledge, whose existence within these contexts is described as being beyond the scope of normal scientific understanding.
                 Notable paranormal beliefs include those that pertain to extrasensory perception (for example, telepathy), spiritualism and the pseudosciences of ghost hunting, cryptozoology, and ufology.
                Proposals regarding the paranormal are different from scientific hypotheses or speculations extrapolated from scientific evidence because scientific ideas are grounded in empirical observations and experimental data gained through the scientific method. 
                In contrast, those who argue for the existence of the paranormal explicitly do not base their arguments on empirical evidence but rather on anecdote, testimony, and suspicion. 
                The standard scientific models give the explanation that what appears to be paranormal phenomena is usually a misinterpretation, misunderstanding, or anomalous variation of natural phenomena.
            </p>
        </div><br>
          <div class="deta">
           <center><h2>Paranormal Subjects</h2> \</center>
           <p>
            The paranormal can best be thought of as a subset of pseudoscience. What sets the paranormal apart from other pseudosciences is a reliance on explanations for alleged phenomena that are well outside the bounds of established science. 
            Thus, paranormal phenomena include extrasensory perception (ESP), telekinesis, ghosts, poltergeists, life after death, reincarnation, faith healing, human auras, and so forth. 
            The explanations for these allied phenomena are phrased in vague terms of "psychic forces", "human energy fields", and so on. 
            This is in contrast to many pseudoscientific explanations for other nonparanormal phenomena, which, although very bad science, are still couched in acceptable scientific terms.
           </p>
          </div>
          <div class="every"><br>
            <img src="paranormal.jpg" alt="">
            <h2>
                Ghost Hunting   
            </h2>
            <p>
             Ghost hunting is the investigation of locations that are reportedly haunted by ghosts. 
             Typically, a ghost-hunting team will attempt to collect evidence supporting the existence of paranormal activity.
             In traditional ghostlore, and fiction featuring ghosts, a ghost is a manifestation of the spirit or soul of a person.
             Alternative theories expand on that idea and include belief in the ghosts of deceased animals. 
             Sometimes the term "ghost" is used synonymously with any spirit or demon;[13] however, in popular usage the term typically refers to the spirit of a deceased person.
            </p>
        </div>
        <div class="every"><br><br>
            <img src="parti.jpg" alt="">
            <h2>
                Ufology  
            </h2>
            <p>
                Many scientists are actively engaged in the search for unicellular life within the Solar System, carrying out studies on the surface of Mars and examining meteors that have fallen to Earth.
                Projects such as SETI are conducting an astronomical search for radio activity that would show evidence of intelligent life outside the Solar System.
                Scientific theories of how life developed on Earth allow for the possibility that life also developed on other planets. 
                The paranormal aspect of extraterrestrial life centers largely around the belief in unidentified flying objects (UFOs) and the phenomena said to be associated with them.
            </p>
        </div>
        <div class="every"><br>
            <img src="big.jpg" alt="">
            <h2>
                Cryptozoology 
            </h2>
            <p>
                Cryptozoology is a pseudoscience and subculture that aims to prove the existence of entities from the folklore record, such as Bigfoot, chupacabras, or Mokele-mbembe. 
                Cryptozoologists refer to these entities as cryptids, a term coined by the subculture.Cryptids are animals that cryptozoologists believe may exist somewhere in the wild, but whose present existence is disputed or unsubstantiated by science. 
                Cryptozoology is a pseudoscience, which primarily looks at anecdotal stories, and other claims rejected by the scientific community.
            </p>
        </div>
        <div class="deta"><br><br>
            <center><h2>Paranormal Investigators</h2></center><br><br>
        <div class="every">
            <img src="warren.jpeg" img class="betw" alt="">
            <p class="formma">
                <em>Name: </em><span>Lorraine Warren(left-side) and Edward Warren(right-side)</span><br>
                <em>Age: </em><span>92(dead) and 79(dead)</span><br>
                <em>Born: </em><span>January 31, 1927 and September 7, 1926 in Bridgeport,Connecticut,U.S</span><br>
                <em>Occupation: </em><span>Paranormal investigators,authors</span><br>
                <em>Notable Investigation: </em>
                <span>
                    Annabelle,
                    Perron family (Conjuring 2),
                    Arne Johnson (Conjuring 3).
                </span><br>
            </p>    
        </div>
    </div>
    <img src="gt2.jpg" img class="betw" alt=""><br>
    <div class="every">
       <p class="formma">
                <em>Name: </em><span>Gaurav Tiwari</span><br>
                <em>Age: </em><span>31(dead)</span><br>
                <em>Born: </em>2 September 1984 in Patna, Bihar, India<span></span><br>
                <em>Occupation: </em><span>Paranormal investigators, Reality Show</span><br>
                <em>Notable Investigation: </em><span> UFO field researcher and ParaNexus representative in India </span><br>
       </p>
    </div>
    <img src="mg.jpg" img class="betw" alt=""><br><br>
    <div class="every">
       <p class="formma">
                <em>Name: </em><span>Maurice Grosse</span><br>
                <em>Age: </em><span>87(dead)</span><br>
                <em>Born: </em>6 March 1919 in London, England<span></span><br>
                <em>Occupation: </em><span>Paranormal investigator, inventor, author</span><br>
                <em>Notable Investigation: </em><span> Perron family (Conjuring 2) </span><br>
       </p>
    </div>
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