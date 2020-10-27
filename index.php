<?php
  require "header.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
         <?php
          if (isset($_SESSION['userId'])) {
            echo '<p class="login-status">Du er logget på!! <?php echo $email?></p>';
                        echo $email['uid'];
          }
          else {
            echo '<p class="login-status">Du er ikke logget på!</p>';
          }
         ?>
       </section>
      </div>
     </main>
<?php
   require "footer.php";
?>
