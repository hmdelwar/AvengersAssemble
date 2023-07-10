<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url("../../images/images_ironMan/IronManBackground2.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  font-family: "Lucida Console", Monaco;
}
header{
	text-align: center;
	font-size: 30px;
	color: gold;
  opacity: 0.8; 
	margin-left: 10%;
  border-radius: 25px;
	width: 80%;
}
a.border {
	border-style: outset;
	border-color: green;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
}

li {
  float: left;  
}

li a {
  display: block;
  padding: 8px;
  background-color: white;
  font-size: 20px;
}

li a:hover {
  background-color: gold;
}

section{
  float: left;
  background-color: black;
  text-align: center;
  font-size: 20px;
  opacity: 0.6; 
  margin-left: 5%;
  border-radius: 25px;
  width: 55%;
  color: white;
}

p.textbox{
  text-align: left;
  font-size: 20px;
  width: 80%;
  color: white;
  margin-left: 10%;
  border-radius: 25px;
}

footer{
  width: 100%;
  text-align: center;
  opacity: 0.8;
  background-color: #f1f1f1;
  margin-top: 90%;
  border-radius: 25px;
}

</style>
</head>
<body>

<ul>

  <li><a href="../../homepage.html">Main Page</a></li>
  <li><a href="../../Avengers/CaptainAmerica/captainamerica.html">Captain America</a></li>
  <li><a href="../../Avengers/Thor/Thor.html">Thor</a></li>
  <li><a href="../../Avengers/Hulk/HulkPage.html">Hulk</a></li>
  <li><a href="../../Avengers/Hawkeye/Hawkeye.html">Hawkeye</a></li>
  <li><a href="../../Avengers/BlackWidow/bw.html">Black Widow</a></li>

</ul>



<header>
<h1>Iron Man</h1>
</header>

<!-- Left Side -->
<section>
  <!--All this content is from the Iron Man Wiki page-->
	<p class="textbox">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Iron Man is a fictional superhero appearing in American comic books published by Marvel Comics. The character was co-created by writer and editor Stan Lee, developed by scripter Larry Lieber, and designed by artists Don Heck and Jack Kirby. The character made his first appearance in Tales of Suspense #39 (cover dated March 1963), and received his own title in Iron Man #1 (May 1968). Also in 1963, the character founded the Avengers alongside Thor, Ant-Man, Wasp and the Hulk.
  </p>

  <p class="textbox">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  A wealthy American business magnate, playboy, and ingenious scientist, Anthony Edward "Tony" Stark suffers a severe chest injury during a kidnapping. When his captors attempt to force him to build a weapon of mass destruction, he instead creates a mechanized suit of armor to save his life and escape captivity. Later, Stark develops his suit, adding weapons and other technological devices he designed through his company, Stark Industries. He uses the suit and successive versions to protect the world as Iron Man. Although at first concealing his true identity, Stark eventually publicly reveals himself to be Iron Man.
  </p>

  <p class="textbox">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Initially, Iron Man was a vehicle for Stan Lee to explore Cold War themes, particularly the role of American technology and industry in the fight against communism. Subsequent re-imaginings of Iron Man have transitioned from Cold War motifs to contemporary matters of the time.
  </p>

  <p class="textbox">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Throughout most of the character's publication history, Iron Man has been a founding member of the superhero team the Avengers and has been featured in several incarnations of his own various comic book series. Iron Man has been adapted for several animated TV shows and films. The Marvel Cinematic Universe character was portrayed by Robert Downey Jr. in the Marvel Cinematic Universe films Iron Man (2008), The Incredible Hulk (2008) in a cameo, Iron Man 2 (2010), The Avengers (2012), Iron Man 3 (2013), Avengers: Age of Ultron (2015), Captain America: Civil War (2016), Spider-Man: Homecoming (2017), Avengers: Infinity War (2018) and Avengers: Endgame (2019). The character also appeared in Spider-Man: Far From Home (2019) and in the upcoming Black Widow (2021) through archive footage.
  </p>

  <p>Here is a fun fact about Iron Man:</p>
  <p class="textbox" style="color: gold;"><?php
    if(array_key_exists('funFact', $_POST)) { 
            funFact(); 
        } 
        function giveFact(int $num){
          switch ($num) {
            case '0':
              echo "<b>Iron Man was the founder of the Avengers, but isn't the leader. Often Captain America is seen as the leader of the groupk</b>";
              break;
            case '1':
              echo "<b>Iron Man's famous AI software JARVIS is actually an acronym. It stands for: Just a Rather Very Intelligent System</b>";
              break;
            case "2":
              echo "<b>In the final battle in Avengers: Endgame, Iron Man sacrifices himself and dies to save everyone else.</b>";
              break;
            case "3":
              echo "<b>During the course of the Marvel Movies it seems that Tony Stark created 85 Iron Man suits!</b>";
              break;
            case "4":
              echo "<b>Iron man was created during the height of the cold war and was first concieved as a anti-communist hero.</b>";
              break;
            case "5":
              echo "<b>Tony Stark, the man in the suit, graduated from The Massacusets Institute of Technology (MIT) at the age of 17 with a masters degree in chemical engineering.</b>";
              break;
          }
        }
        function funFact(){
          $num = random_int(0, 5); 
            giveFact($num);
    }
  ?></p>
  <p>For a new fun fact hit the button at the bottom of the page!</p>

</section>

<footer>
  <!-- PHP code to get a fun fact when the button is pressed -->
  <form method="post"> 
      <input type="submit"  name="funFact" class="button" value="Fun Fact!" /> 
  </form>

  <audio controls loop autoplay>
    <source src='../../sounds/sounds_IronMan/I AM IRON MAN (Scene).mp3' type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
</footer>

</body>
</html>

