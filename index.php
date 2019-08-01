      <?php
        include 'inc/header.php';
       ?>

      <div class="column">
        <!--  header -->
        <?php
          $a=$_GET["page"];
          if ($a == 'home') {
            include 'inc/home/h.php';
          }
          if ($a == 'wphs') {
            include 'inc/wp-hack-suite/wphs.php';
          } else {
            echo "FUCK YOU";
          }



         ?>

      </div>
       <!-- <div class="columnr"></div> -->
      </div>
  </body>
</html>
