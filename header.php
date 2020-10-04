<?php
  session_start()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
   <body>
    <header>
     <nav>
       <ul>
         <li><img src="img/tietgenLogo.png" alt="logo" width="75" height="75" href="index.php"></li>
         <li><a class="spilNav" href="index.php">Spil</a></li>
         <li><a class="leaderboardNav" href="#">Leaderboard</a></li>
         <li><a class="omOsNav" href="#">Om os</a></li>
       </ul>

<!-- Det nedenstående script er et if / else statement der gemmer, eller fremhæver login/logout knap afhængig af om brugeren er logget ind eller ud. -->

<!-- <php , PHP open tags for at indikere at vi koder i php, så programmet kan skelne mellem sprogene -->
       <?php
        if (isset($_SESSION['userId'])) {    // hvis vi har $_SESSION variablen fra databasen udføre den koden. $_SESSION er tilgængelig når brugeren er logget ind
          echo '<a class="logout" href="inkludere/logout.ink.php">
            <button type="submit" class="logoutHeaderKnap" name="logout-submit" action="inkludere/logout.ink.php">Logout</button>
            </a>';
            // <a class="logout" siger, at vi har et anchor tag der referere til inkludere/logout.ink.php, som er et logout script.
            // Nedeunder definere vi knappen der sender os videre til scriptet inkludere/logout.ink.php
        }
        else {     // hvis vi ikke har $_SESSION variablen fra databasen udføre den "else" koden.
          echo '<a class="login" href="loginSite.php">
              <button type="button" class="loginHeaderKnap" name="login-submit" action="loginSite.php">Login</button>
            </a>';
            // <a class="login" siger, at vi har et anchor tag der referere til "loginSite.php, som er en login form
            // Nedeunder definere vi knappen der sender os videre til vores login form.
        }
       ?>
<!-- ,?>  PHP closing tags for at indikere at vi ikke koder i php mere, så programmet kan skelne mellem sprogene -->

     </nav>
    </header>
