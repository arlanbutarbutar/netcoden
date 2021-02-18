<?php if(!isset($_SESSION)){session_start();}
require_once("Application/controller/script.php");
$_SESSION['page-name']="Form Join";
?>
<!DOCTYPE html>
<html lang="en">
    <head><?php require_once("Application/access/header.php");?></head>
    <body id="page-top">
        <div class="wrapper">
            <?php require_once("Application/access/navbar.php");?>
            <div class="service">
                <style>.header-service{margin-top:-2.5%;}@media screen and (max-width:640px){.header-service{margin-top:-20%;}}@media(max-width:400px){.header-service{margin-top:-24%;}}</style>
                <header class="bg-dark shadow py-5 mb-5 header-service">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-12" data-aos="fade-left">
                                <h1 class="display-4 text-white mt-5 mb-2">Web Services</h1>
                                <p class="lead mb-5 text-white-50">Full Stack - UI & UX [ Web Development ]</p>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container">

                    <div class="row" data-aos="fade-up">
                        <div class="col-md-8 mb-5">
                            <h2>What We Do</h2>
                            <hr>
                            <p>We provide services in the form of website creation services, where you can submit or register a website to us and what we will do is ensure that the website that we make is really useful for you and in accordance with the purpose of the website.</p>
                            <p>If you are a programmer and want a design for us, we also sell some designs that have already been made and can be modified and certainly responsive.</p>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h2>Contact Us</h2>
                            <hr>
                            <address>
                                <strong>Netmedia Framecode</strong>
                                <br>Jl. W.J Lalamentik no.95(NET Code) 85111
                                <br>Kota Kupang, Nusa Tenggara Timur
                                <br>
                            </address>
                            <address>
                                <abbr title="Phone">No:</abbr>
                                <a href="https://wa.me/628113827421?text=Hai NET Code!" target="blank">(+62) 0811 3827 421</a>
                                <br>
                                <abbr title="Email">Mail:</abbr>
                                <a href="mailto:#">arlan270899@gmail.com</a>
                            </address>
                        </div>
                    </div>
                    <!-- store tetap -->
                    <div class="row">
                        <?php if(mysqli_num_rows($store_stay)>0){while($sv=mysqli_fetch_assoc($store_stay)){?>
                        <div class="col-md-4 mb-5" data-aos="fade-up">
                            <div class="card h-100 shadow">
                                <style>.img-service{width:348px;height:200px;}@media (max-width:640px){.img-service{width:418px;height:250px}}@media(max-width:400px){.img-service{width:328px;height:250px}}</style>
                                <img class="card-img-top img-service" src="assets/img/img-store/<?= $sv['img']?>" alt="">
                                <div class="card-body">
                                    <h2 class="card-title mb-0"><?= $sv['judul']?></h2>
                                    <small class="h5"><?= $sv['ket']?></small><br>
                                    <small class="card-text text-muted m-0 p-0 h6">Starting at</small>
                                    <h4>$ <?= number_format($sv['harga'])?> <small>/Year</small></h4>
                                    <p class="card-text text-muted"><?= $sv['deskripsi']?></p>
                                </div>
                                <div class="card-footer">
                                    <form action="" method="POST">
                                        <input type="hidden" name="akses-check" value="1">
                                        <input type="hidden" name="id_store_stay" value="<?= $sv['id_store_stay']?>">
                                        <?php if(isset($sv['is_active'])){if($sv['is_active']==1){?>
                                        <button type="submit" name="order-check" class="btn btn-dark">Order Now</button>
                                        <?php }else if($sv['is_active']>1){?>
                                        <div class="btn btn-outline-dark">Order Now</div>
                                        <?php }}?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php }}else if(mysqli_num_rows($store_stay)===0){echo "<div class='text-center text-info mb-5 h4'>Sorry, we don't provide our product at the moment!</div>";}?>
                    </div>

                </div>
                <div class="container">
                    <section class="info-template" data-aos="fade-up">
                        <div class="col-md-12 p-5 m-0">
                            <div class="text-center">
                                <h1>Want a Template?</h1>
                                <p>We also provide the templates that you need. Starting from simple to responsive ones.</p>
                            </div>
                        </div>
                    </section>
                    <section class="template">
                        <!-- store berjalan -->
                        <div class="row">
                            <?php if(mysqli_num_rows($store)>0){while($sv=mysqli_fetch_assoc($store)){?>
                            <div class="col-md-4 mb-5" data-aos="fade-up">
                                <div class="card h-100 shadow">
                                    <img class="card-img-top img-service" src="assets/img/img-store/<?= $sv['img']?>" alt="">
                                    <div class="card-body">
                                        <h2 class="card-title mb-0"><?= $sv['judul']?></h2>
                                        <small class="h5"><?= $sv['ket']?></small>
                                        <h4>$ <?= number_format($sv['harga'])?></h4>
                                        <p class="card-text text-muted"><?= $sv['deskripsi']?></p>
                                    </div>
                                    <div class="card-footer">
                                        <form action="" method="POST">
                                            <input type="hidden" name="akses-check" value="2">
                                            <input type="hidden" name="id_store" value="<?= $sv['id_store']?>">
                                            <?php if(isset($sv['is_active'])){if($sv['is_active']==1){?>
                                            <button type="submit" name="order-check" class="btn btn-dark">Order Now</button>
                                            <?php }else if($sv['is_active']>1){?>
                                            <div class="btn btn-outline-dark">Order Now</div>
                                            <?php }}?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php }}else if(mysqli_num_rows($store)===0){echo "<div class='text-center text-info mb-5 h4'>Sorry, we don't provide our product at the moment!</div>";}?>
                        </div>
                    </section>
                </div>
            </div>
        <?php require_once("Application/access/footer.php");?>
    </body>
</html>