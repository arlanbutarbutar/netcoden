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
                        <div class="col-md-12 d-sm-flex justify-content-between">
                            <div class="col-md-12 p-4">
                                <div class="col-md-12" data-aos="fade">
                                    <h2>Hi, Have a nice day!</h2><hr>
                                </div>
                                <div class="col-md-12" data-aos="fade-up">
                                    <h4>Enter your data to enter our group! it's easy:)</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label><small class="h6 text-danger">*</small>Username</label>
                                            <input type="text" name="username" placeholder="Your Name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><small class="h6 text-danger">*</small>Email</label>
                                            <input type="email" name="email" placeholder="Your Email Address" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><small class="h6 text-danger">*</small>Phone Number</label>
                                            <input type="number" name="no-hp" placeholder="Phone Number" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><small class="h6 text-danger">*</small>Do you know about the program?</label>
                                            <input type="text" name="question-1" placeholder="Question 1" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><small class="h6 text-danger">*</small>How far do you know about the program?</label>
                                            <input type="text" name="question-2" placeholder="Question 2" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>If you know programming languages, what programming languages do you know?</label>
                                            <input type="text" name="question-3" placeholder="Question 3" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><small class="h6 text-danger">*</small>What is your purpose for joining our group?</label>
                                            <input type="text" name="question-4" placeholder="Question 4" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="join-group" class="btn btn-dark">Join</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php require_once("Application/access/footer.php");?>
    </body>
</html>