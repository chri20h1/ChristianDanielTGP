<?php
  include_once "header.php";
?>

  <link rel="stylesheet" href="styles/grid.css"/>

   <main>
     <div class="wrapper-main">

       <?php
        if (isset($_SESSION['useruid'])) {
          echo '<section class="section-default"><p class="login-status">Du er logget på!!!!</p></section>';
       }
        else {
          echo '<img class="forside" src="img/tietPic.png" alt="logo" width="100%" height="100%">';
        }
       ?>

       <div class="grid">
         <div class="title">
<p> Velkommen til TGP bedre kendt som tietgen game portal, det er her hvor du kan konkurre
 mod din egen og andres klasse, vis du er den bedste på skolen ved at ligge øverst på leaderboardet, hver måned vil der blive kåret en vinder som
er en meget stor ære</p>
         </div>
         <div class="score">
<p>Sidste måneds vinder: XXXX</p>
<p>All time highscore: XXXX, XXXXXX</p>
         </div>
         <div class="game">
<p>Hvis du vil prøve at slå highscoren for denne måned kan du klike her</p>
<br>
<p><a href="games.php" class="button1">Snake</a></p>
         </div>
         <div class="footer">
<h1>:)</h1>
         </div>
       </div>

      </div>
     </main>
<?php
   include_once "footer.php";
?>
