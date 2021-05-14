<?php
    session_start();
    include '_main.php';
?>
<?=template_header('Register')?>
<div class="container" style="padding: 100px 370px;">
        <div class="row mt-5 p-5 shadow p-3 mb-5 bg-white rounded">
            <h2 class="ml-2 mb-3">Register</h2>
            <form action="RegistController.php" method="post" class="col-12">
                <!-- form -->
                <div class="form-group">
                    <label for="">Fullname</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Fullname">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                    <i class="fas fa-eye position-absolute" onclick="showPass()" style="cursor: pointer; top: 215px; left:290px;"></i>
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="confpass" placeholder="Confirm Password">
                    </div>
                <!-- alert -->
                <small class="form-text text-danger mb-2">
                <?php
                    if (isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                ?>
                </small>
                <button type="submit" name="regist" class="btn btn-primary shadow btn-block">Register</button>
            </form>
        </div>
    </div>
<?=template_footer()?>