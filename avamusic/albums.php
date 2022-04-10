<?php
include "header.php" ;
include "database.php" ;
$singer_id = $_GET["singers"];
$albums = $db->query("SELECT * FROM albums WHERE singer_id=$singer_id");
 ?>
    <div class= "container" >
            <div class="row mt-5">
                <hr>
                <h2 class="album-text">آلبوم ها </h2>
                <div class="font">
                <?php if($albums->num_rows == 0) :?>
                    <div class="alertalert-secondry" role="alert">  آلبوم این خواننده هنوز افزوده نشده است</div>
                    <?php else: ?>
                    </div>
                    <?php foreach ($albums as $album):?>
                        <div class = "col-3">
                                <a href="musics.php?albums=<?php echo $album["id"]?>" class ="my-card">
                                    <div class =" card mt-3">
                                        <img src="<?php echo $album["image"];?>" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $album["name"];?></h5>
                                            </div>
                                    
                                    </div>
                                </a>    
                        </div>
                    <?php endforeach; ?>  
                    <?php endif; ?>
            </div>
        
    </div>
    
 <?php
include "footer.php" ;
?>
