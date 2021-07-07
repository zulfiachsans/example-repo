<?php 
session_start();
if (isset($_SESSION['username'])) {
    header('location: index.php');
}else{
$user = (isset($_SESSION['user_input']))? $_SESSION['user_input'] : '';
$pass = (isset($_SESSION['pass_input']))? $_SESSION['pass_input'] : '';
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <link rel="stylesheet" href="style.css">
<center>
    <br>
    <div class="login">
        <h1>Silahkan Login </h1> <br>
        <form action="proses_login.php" method="post">
            <input type="text" name="username" placeholder="Username" autofocus="" value="<?= $user; ?>">
            <input type="password" name="password" placeholder="Password" value="<?= $pass; ?>">
            <button type="submit" name="login">Login</button>
        </form>     
        <?php
         if(isset($_SESSION['alert']) || isset($_SESSION['alert_user']) || isset($_SESSION['alert_pass'])){
            echo (isset($_SESSION['alert']))? $_SESSION['alert'] : '';
            echo (isset($_SESSION['alert_user']))? $_SESSION['alert_user'] : '';
            echo (isset($_SESSION['alert_pass']))? $_SESSION['alert_pass'] : '';
            unset($_SESSION['alert']); 
            unset($_SESSION['alert_pass']); 
            unset($_SESSION['alert_pass']); 
         }else{
            unset($_SESSION['alert_user']);
            unset($_SESSION['alert_pass']); 
         }?>
    </div>
</center>
<br>
<?php include 'footer.php'; ?>
<?php } ?>