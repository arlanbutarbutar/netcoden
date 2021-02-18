<?php if(!isset($_SESSION)){session_start();}
require_once("Application/controller/script.php");
if(isset($_SESSION['page-name'])){unset($_SESSION['page-name']);}
?>
<!DOCTYPE html>
<html lang="en">
    <head><?php require_once("Application/access/header.php");?></head>
    <body id="page-top">
        <a name="home"></a>
        <div class="wrapper">
            <!-- == bg video - landing page - navbar == -->
                <div class="video-container">
                    <video playsinline autoplay muted loop id="bgvid">
                        <source src="Assets/video/netcoden.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="header">
                    <h1>Netmedia Framecode Web Development.</h1>
                </div>
                <?php require_once("Application/access/navbar.php");?>
            <!-- == content == -->
                <div class="content">
                    <!-- == section about == -->
                        <a name="about"></a>
                        <section class="story">
                            <div class="container-fluid">
                                <div class="section-data">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">01</div>
                                        <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">We Story</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-6 section-subheading wow fadeInUp" data-wow-delay="0.5s"><h1>The journey of Netmedia Framecode from the beginning was made in 2018 until now.</h1></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-6 section-info wow fadeInUp" data-wow-delay="0.6s">We have been through hard times until now. At this point we also experienced a decline in bookings due to competition from the company. But we continue to strive and prioritize our best service to consumers. We are always ready to help your complaints related to Web Development.</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <!-- == section service == -->
                        <a name="services"></a>
                        <section class="services">
                            <div class="container-fluid">
                                <div class="section-data">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">02</div>
                                        <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">What we do</div>
                                    </div>
                                    <div class="row service">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="icon">
                                                <ion-icon ios="ios-book" md="md-book"></ion-icon>
                                            </div>
                                            <div class="icon-title">
                                                Prioritizing UI for user convenience and ease of navigation on the website.
                                            </div>
                                        </div>
                                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                                            <div class="icon">
                                                <ion-icon ios="ios-git-compare" md="md-git-compare"></ion-icon>
                                            </div>
                                            <div class="icon-title">
                                                Back End, for the admin to control the user so that the UX can be maximized and not disappoint.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row service">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                                            <div class="icon">
                                                <ion-icon ios="logo-buffer" md="logo-buffer"></ion-icon>
                                            </div>
                                            <div class="icon-title">
                                                Creating complex databases and prioritizing database security are always backed up.
                                            </div>
                                        </div>
                                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="icon">
                                                <ion-icon ios="ios-unlock" md="md-unlock"></ion-icon>
                                            </div>
                                            <div class="icon-title">
                                                Secure website data by always being backed up and protected with existing security.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <!-- == section newsletter == -->
                        <a name="newsletter"></a>
                        <section class="newsletter">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="news-data">
                                            <div class="section-subheading">
                                                <h1 class="wow fadeInUp" data-wow-delay="0.3s">Subscribe with us</h1>
                                            </div>
                                            <div class="col-md-6 m-auto fadeInUp" data-wow-delay="0.4s">
                                                <?php if(isset($message_success)){echo $message_success;}if(isset($message_danger)){echo $message_danger;}?>
                                            </div>
                                            <form action="" method="post">
                                                <div class="input-group wow fadeInUp" data-wow-delay="0.5s">
                                                    <input type="email" name="email" class="form-control" placeholder="Your Email...">
                                                    <span class="input-group-btn">
                                                        <button class="btn" name="subscribe-submit" type="submit">Subscribe</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <!-- section contact -->
                        <a name="contact"></a>
                        <section class="contact">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">03</div>
                                    <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">Contact us</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6 icon-title wow fadeInUp" data-wow-delay="0.5s">Send us any message about the obscurity or problems you are currently facing about our service!</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6">
                                        <?php if(isset($message_success)){echo $message_success;}if(isset($message_danger)){echo $message_danger;}?>
                                        <form action="" name="contact-form" id="contact-form" method="POST">
                                            <ul>
                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                    <label for="contact-name">Name :</label>
                                                    <div class="textarea">
                                                        <input type="text" name="name" id="contact-name" required>
                                                    </div>
                                                </li>
                                                <br>
                                                <li class="wow fadeInUp" data-wow-delay="0.7s">
                                                    <label for="contact-email">E-mail :</label>
                                                    <div class="textarea">
                                                        <input type="email" name="email" id="contact-email" required>
                                                    </div>
                                                </li>
                                                <br>
                                                <li class="wow fadeInUp" data-wow-delay="0.8s">
                                                    <label for="contact-project">Message :</label> 
                                                    <div class="textarea">
                                                        <textarea name="message" id="contact-project" rows="6" required></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                            <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp" data-wow-delay="0.9s">Send Message</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
        <?php require_once("Application/access/footer.php");?>
    </body>
</html>