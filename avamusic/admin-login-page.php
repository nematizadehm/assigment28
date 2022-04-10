<?php
include "header.php" ;

 ?>

 <div class="container">
     <div class="row">
         <div class="col-3">
             <div class="card">
                <div class="card-header">
                    ورود به پنل مدیریت
                    <div class="card-body">
                        <form method="post" action="admin-login-process.php">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">نام کاربری</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">کلیدواژه</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
                                </div>
                                <button type="submit" class="btn btn-primary">ورود</button>
                        </form>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </div>

 <?php
include "footer.php" ;
?>
