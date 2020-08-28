<?php 
//PHP je Hypertext Preprocessor. Prvo se izvodi PHP pa onda HTML
//ako PHP ima drugog sadržaja osim PHP koda-a tada se PHP dio zatvara
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>IPA</title>
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
<h1>Hello
    <?php 
    //sve što je prikazano do sada a i sve ubuduće može se ubaciti bilo gdje u HTML
    // primjer kao sadržaj elementa 
    echo $_GET["name"];
    ?></h1>
    <p class="<?php /* primjer kao vrijednost atributa */ echo $_GET["name"]; ?>">Content</p>

<p>
<?php 
//ovo ne raditi
//zatvarati element koji je otvoren u html-u 
echo "</p>";
?>

<p class<?php 
//ovo isto ne raditi - iako bude sintaksno ipravno
echo "=\"name\"";
?>>Osijek</p>

Source for learning HTML, CSS ans JS
<ol>
  <li><a href="https://www.w3.org/standards/webdesign/htmlcss">https://www.w3.org/standards/webdesign/htmlcss</a></li>
  <li><a href="https://developer.mozilla.org/hr/docs/Web/HTML">https://developer.mozilla.org/hr/docs/Web/HTML</a></li>
  <li><a href="https://developer.mozilla.org/hr/docs/Web/CSS">https://developer.mozilla.org/hr/docs/Web/CSS</a></li>
  <li><a href="https://developer.mozilla.org/hr/docs/Web/JavaScript">https://developer.mozilla.org/hr/docs/Web/JavaScript</a></li>
</ol>

Please no not use https://www.w3schools.com
<cite>
The site derives its name from the World Wide Web (W3), but is not affiliated with the W3C.
</cite>
from https://www.w3schools.com/about/default.asp

<p>
w3schools is not bad, but is more like enciklopedia type informaton. What you need is expert information!
</p>


  <script src="js/scripts.js"></script>
</body>
</html>