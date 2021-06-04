<?php
  include_once "header.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
         <?php if (isset($_SESSION['useruid'])) : ?>

            <form method="get" action="/snake.php">
                <button type="submit" class="button1">Spil snake</button>
            </form>

          <?php else : ?>

            <p class="login-status">Du er ikke logget på!</p>

           <?php endif; ?>
       </section>
      </div>
     </main>
<?php
   include_once "footer.php";
?>
