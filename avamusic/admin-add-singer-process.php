<?php
include "database.php";
$name = $_POST["name"];
if($_FILES["image"]["size"]> 6000)
{
    echo " فایل بسیار بزرگ است ، فایل دیگری را جایگزین کنید";
   header("location: admin_add_music.php");
}
else
{
    $image_name="img/".$_FILES["image"]["name"];
    $db->query("INSERT INTO artist(name, image) VALUES ('$name','$image_name')");

    move_uploaded_file($_FILES ["image"]["tmp_name"],$image_name );
    header("location:admin_musics.php");
}
?>