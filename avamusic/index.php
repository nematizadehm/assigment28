<?php
include "header.php" ;
include "database.php" ;
$singers = $db->query("SELECT * FROM singers");
 ?>
<body>


<div class=container>
<figure><img src="image\singers\6.jpg" class="img-responsive"/>

</div>

<?php
include "footer.php" ;
?>
