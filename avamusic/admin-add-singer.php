<?php
include "header.php" ;
include "database.php";
$singers=$db->query("SELECT*FROM singers");
?>
 

 <div class="container">
        <h3 class="text-light">افزودن خواننده جدید</h3>
        <hr class="text-light">

        <div class="row mt-5">
            <div class="col-3">
                <?php include "admin-site.php"; ?>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                    <form  method="post" action="admin-add-singer-process.php" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder=" نام خوانده" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="file" name="image" class="form-control" >
                    </div>
                    </div>
                            <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php
include "footer.php" ;
?>
