<?php
include "header.php" ;
include "database.php" ;
$singers = $db->query("SELECT * FROM singers");
 ?>
    <div class= "container" >
            <div class="row mt-5">
                <hr>
                <h2 class="khanandeh-text">خواننده ها</h2>
                    <?php foreach ($singers as $singer):?>
                        <div class = "col-3">
                        
                            <a href="albums.php?singers=<?php echo $singer["id"]?>" class ="my-card">
                                    <div class =" card mt-3">
                                        <img src="<?php echo $singer["image"];?>" class="card-img-top">
                                        
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $singer["name"];?></h5>
                                            </div>
                                            
                                    
                                    </div>
                            </a>    
                        </div>
                    <?php endforeach; ?>  
            </div>
        
    </div>
    
 <?php
include "footer.php" ;
?>
