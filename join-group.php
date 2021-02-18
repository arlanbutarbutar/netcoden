<?php if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['id-group'])){header("Location: form-group");exit;}
require_once("Application/controller/script.php");
$_SESSION['page-name']="Join Group";
?>
<!DOCTYPE html>
<html lang="en">
    <head><?php require_once("Application/access/header.php");?></head>
    <body id="page-top">
        <div class="wrapper">
            <?php require_once("Application/access/navbar.php");?>
            <div class="service">
                <style>.header-service{margin-top:-2.8%;}@media screen and (max-width:640px){.header-service{margin-top:-8.2%;}}</style>
                <header class="bg-dark shadow py-5 mb-5 header-service">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-12" data-aos="fade-left">
                                <h1 class="display-4 text-white mt-5 mb-2">Web Services</h1>
                                <p class="lead mb-5 text-white-50">NET Code Group [Chat about programming, and suitable for you coder]</p>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($message_success)){echo$message_success;}if(isset($message_danger)){echo$message_danger;}?>
                        </div>
                        <div class="col-md-12 text-center" data-aos="fade">
                            <h4 class="text-center font-weight-bold">Join in the group</h4>
                            <?php if(mysqli_num_rows($user_group)>0){while($ug=mysqli_fetch_assoc($user_group)){?>
                                <p class="text-justify">Coder Class helps you to become a programmer not just knowing but really being able to coding. Group members are expected to be active in the group and share anything you don't know about the program or project that you are working on now. For lessons regarding Web Developer please click on the following link net-code.net/lern-coder/. Website Website: [ <a href="http://47.74.65.71:83"> NET Code🌐 </a> ] </p>
                                <form action="" method="POST">
                                    <button type="submit" name="enter-group" class="btn btn-dark btn-lg"><ion-icon name="logo-whatsapp"></ion-icon> Enter</button>
                                </form>
                            <?php }}else if(mysqli_num_rows($user_group)==0){?>
                                <p class="text-center">Want to join our group?</p>
                                <form action="" method="POST">
                                    <button type="submit" name="invite-group" class="btn btn-dark btn-lg"><ion-icon name="logo-whatsapp"></ion-icon> Netmedia Framecode</button>
                                </form>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        <?php require_once("Application/access/footer.php");?>
    </body>
</html>