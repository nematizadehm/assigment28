<?php
include "header.php" ;
include "database.php" ;
$album_id = $_GET["albums"];
$album = $db->query("SELECT * FROM albums WHERE id=$album_id")->fetch_assoc();
$singer_id=$album["singer_id"];
$singer = $db->query("SELECT * FROM singers WHERE id=$singer_id")->fetch_assoc();
$musics = $db->query("SELECT * FROM musics WHERE album_id=$album_id");
 ?>
    <div class= "container" >
            <div class="row">
                <div class="col-3">
                    <ul class="list-group">
                        <?php foreach ($musics as $music):?>
                            <button class="list-group-item" onclick="play_music('<?php echo $music["mp3"] ?>')">
                                <div class="row">
                                    <div class="col-8">
                                        <h6>
                                        <?php echo $singer["name"];?>
                                        </h6>
                                    <?php echo $music["name"];?>
                                    </div>
                                    <div class="col-4">
                                        <img src="1.jpg" alt="">
                                    </div>
                                </div>
                            
                           </button>
                        <?php endforeach; ?>  
                    </ul>
                </div>
                <div class="col-9">
                    <center>
                <img src=" <?php echo $album["image"];?>" class="img-fluid" alt="">
                <br>
                <audio id="music_player" class="mt-5" src="" controls></audio>
                    </center>
                </div>                                          
            </div>
    </div>
    <script>
        function play_music(music_path)
        {
           var music_player =document.getElementById("music_player");
           music_player.setAttribute("scr" , music_path);
           music_Player.play();
        }
    </script>
 <?php
include "footer.php" ;
?>

