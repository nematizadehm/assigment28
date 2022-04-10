<?php
include "header.php" ;

 ?>

<?php if($_SESSION["Login_status"] !=null && $_SESSION["Login_status"]==true):?>
 <div class="container">
     <div class="row justify-content-center">
         <h2 class="text-light">
             داشبورد
         </h2>
     </div>
 </div>
 <?php else
 heaser(header: " Location :index.php");
endif;
 <?php
include "footer.php" ;
?>
