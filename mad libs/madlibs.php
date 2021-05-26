<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>madlib game</title>
  <link rel="stylesheet" href="mystyle.css"> <!--my own style sheet-->
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script><!--link to font awesome (using for small icon)-->
</head>
<body>
  <div id= "header-hero-container">
    <header>
      <div>   
       <a id="logo" href="#">Mad Libs.</a> <!--logo of my game-->
     </div>
   </header>

   <section id="hero">
    <div class="fade"></div>
    <div class="hero-text">
      <h1>Story of My Life</h1> <!--name of the story-->   
      <?php
//array for verbs
      $verbs = array("harm",
       "wait",
       "found",
       "eat",
       "label",
       "frighten",
       "explain",
       "weigh",
       "list",
       "walk",
       "help",
       "crawl",
       "shout",
       "jump",
       "kick",
       "scream",
       "swallow",
       "faint",
       "climb",
       "search",
       "follow"
     );

//array for place
      $places = array("home",
       "toilet",
       "bathroom",
       "kitchen",
       "school",
       "humber collage",
       "brampton",
       "bus stand",
       "airport",
       "barber shop",
       "gas station"
     );

//array for noun
      $nouns = array(
        "Cat",
        "fighter Cat",
        "Grey Cat",
        "Dog",
        "Spongebob",
        "Zebra",
        "silly Minion",
        "Tiger",
        "Unicorn",
        "Potato",
        "Pinkey doll",
        "Avocado",
        "Ox",
        "Cow",
        "Joker",
        "Baymax",
        "Donald Duck",
        "Doraemon",
        "Mickey Mouse",
        "Green Lizard",
        "Pink Bear",
        "Police"
      );
//array for adjectivs
      $adjectives = array("hospitable",
        "alive",
        "glossy",
        "capricious",
        "extra-small",
        "superficial",
        "fierce",
        "feeble",
        "skillful",
        "fearful",
        "distinct",
        "second",
        "extra-large",
        "obscene",
        "unruly",
        "frail",
        "male",
        "numerous",
        "dynamic",
        "sleepy",
        "stupendous",
        "absorbed"
      );
//array for adverbs
      $adverbs = array("courageously",
        "mechanically",
        "boldly",
        "sweetly",
        "foolishly",
        "extremely",
        "justly",
        "exactly",
        "always",
        "solemnly",
        "offensively",
        "commonly",
        "wildly",
        "jealously",
        "instantly",
        "frankly",
        "immediately",
        "hastily"
      );

shuffle($verbs);      //suffle the array for verbs
shuffle($places);     //suffle the array for places
shuffle($nouns);      //suffle the array for nouns
shuffle($adverbs);    //suffle the array for adjectives
shuffle($adjectives);  //suffle the array for adverbs
$verbs = $verbs[0];   //the verb in the array at index 0
$places = $places[0]; //the place in the array at index 0
$nouns = $nouns[0];   //the noun in the array at index 0
$adverbs = $adverbs[0]; //the adverb in the array at index 0
$adjectives = $adjectives[0]; //the adjective in the array at index 0

//my mad libs story
$text = "Hello, I am <a>$nouns</a> live in <a>$places</a>. I like <a>$verbs"."ing</a> people. I do have <a>$adjectives</a> friends. I was <a>$adverbs</a> looking for food. I was <a>$verbs"."ing</a> in the jungle when I found some food. I had to go to the <a>$places</a> again.";
//display the image with extension jpg
echo "<img class = 'image-left' src='/img/$nouns.jpg'>";  
//display the story
echo "<p class = 'text-rigth'>$text</p>";
?>
<div class = 'button-rigth'>
  <!--to reload the page for every click on the button-->
  <input type="button" value="Click me" onclick="window.location.reload();"><br> 
</div> 
<footer class="footer-class"> <!--footer section-->
  <small>
    Copyright &copy; 2019 All rights reserved | This template is made with <span class="fa fa-heart"></span> by <a href="https://colorlib.com">Salwa Saki Islam</a>
  </small>
</footer>
</section  
</body>
</html>