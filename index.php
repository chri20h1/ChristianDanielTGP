<?php
  include_once "header.php";
?>

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

      </div>
     </main>
<?php
   include_once "footer.php";
?>
