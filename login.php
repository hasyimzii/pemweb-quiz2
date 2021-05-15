<?php
    session_start();
    include '_main.php';
?>
<?=template_header('Login')?>
<div class="container" style="padding: 100px 370px;">
        <div class="row mt-5 p-5 shadow p-3 mb-5 bg-white rounded">
            <h2 class="ml-2 mb-3">Login</h2>
            <form action="LoginController.php" method="post" class="col-12">
                <!-- form -->
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>">
                    <i class="fas fa-eye position-absolute" onclick="showPass()" style="cursor: pointer; top: 129px; left:290px;"></i>
                </div>
                <input type="checkbox" name="remember" <?php if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])){ echo "checked";}?>> Remember me
                <!-- alert -->
                <small class="form-text text-danger mb-2">
                <?php
                    if (isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                ?>
                </small>
                <button type="submit" name="login" class="btn btn-primary shadow btn-block mb-2">Login</button>
                <small>Don't have account? <a href="regist.php">Register</a></small>
            </form>
        </div>
    </div>
<?=template_footer()?>