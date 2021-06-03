<?php
  include_once 'header.php';
?>
  <link rel="stylesheet" href="styles/grid.css"/>
   <main>
     <div class="wrapper-main">
       <section class="section-default">
         <?php if (isset($_SESSION['useruid'])) : ?>

            <p class="login-status">Tietgens officielle leaderboard</p>

          <?php else : ?>

            <p class="login-status">Du er ikke logget på!</p>

           <?php endif; ?>

       </section>
      </div>
     </main>
<?php
   include_once "footer.php";
?>
