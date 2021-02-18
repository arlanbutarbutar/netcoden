<?php if(!isset($_SESSION)){session_start();}
    require_once("functions.php"); require_once("connect.php");
// == Alert ==
    if (isset($_SESSION['message-success'])) {
        $message_success = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                " . $_SESSION['message-success'] . "
                    <form action='' method='POST'>
                        <button type='submit' name='message-success' class='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </form>
                </div>";
    }
    if (isset($_SESSION['message-warning'])) {
        $message_warning = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                " . $_SESSION['message-warning'] . "
                    <form action='' method='POST'>
                        <button type='submit' name='message-warning' class='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </form>
                </div>";
    }
    if (isset($_SESSION['message-danger'])) {
        $message_danger = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                " . $_SESSION['message-danger'] . "
                    <form action='' method='POST'>
                        <button type='submit' name='message-danger' class='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </form>
                </div>";
    }
    if (isset($_SESSION['message-info'])) {
        $message_info = "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                " . $_SESSION['message-info'] . "
                    <form action='' method='POST'>
                        <button type='submit' name='message-info' class='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </form>
                </div>";
    }
    if (isset($_SESSION['message-dark'])) {
        $message_dark = "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
                " . $_SESSION['message-dark'] . "
                    <form action='' method='POST'>
                        <button type='submit' name='message-dark' class='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </form>
                </div>";
    }
    if (isset($_POST['message-success'])) {
        unset($_SESSION['message-success']);
    }
    if (isset($_POST['message-warning'])) {
        unset($_SESSION['message-warning']);
    }
    if (isset($_POST['message-danger'])) {
        unset($_SESSION['message-danger']);
    }
    if (isset($_POST['message-info'])) {
        unset($_SESSION['message-info']);
    }
    if (isset($_POST['message-dark'])) {
        unset($_SESSION['message-dark']);
    }
    if(isset($_POST['contact-submit'])){
        if(contact($_POST)>0){
            $_SESSION['contact-success']="Your message was sent to us successfully, and we will review it soon.";
            header("Location: index#contact");
            exit;
        }
    }
    if(isset($_POST['subscribe-submit'])){
        if(subscribe($_POST)>0){
            header("Location: index");
            exit;
        }
    }
    if(isset($_POST['server'])){
        if(server()){
            header("Location: index");
            exit;
        }
    }
    if(isset($_POST['success'])){
        unset($_SESSION['message-success']);
    }
    if(isset($_POST['danger'])){
        unset($_SESSION['message-danger']);
    }
    if(isset($_POST['warning'])){
        unset($_SESSION['message-warning']);
    }
    if(isset($_POST['info'])){
        unset($_SESSION['message-info']);
    }
    if(isset($_POST['dark'])){
        unset($_SESSION['message-dark']);
    }
// == visitor ==
    if(isset($_POST['subscribe-submit'])){
        if(subscribe($_POST)>0){
            $_SESSION['message-success']="Thanks for your subscribe :)";
            header("Location: ./#newsletter");exit;
        }
    }
    if(isset($_POST['contact-submit'])){
        if(contact($_POST)>0){
            $_SESSION['message-success']="Thanks for your subscribe :)";
            header("Location: ./#contact");exit;
        }
    }
    if(isset($_POST['invite-group'])){
        header("Location: form-group");
        exit;
    }
    if(isset($_POST['join-group'])){
        if(join_group($_POST)>0){
            $_SESSION['message-success']="Congratulations, you have joined the NET Code group, click Join Now!";
            header("Location: join-group");exit;
        }
    }
    if(isset($_SESSION['id-group'])){
        $id_group=htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_SESSION['id-group']))));
        $user_group=mysqli_query($conn, "SELECT * FROM user_group WHERE id_group='$id_group'");
    }
    if(isset($_POST['invite-group'])){
        header("Location: form-group");exit;
    }
    if(isset($_POST['enter-group'])){
        unset($_SESSION['message-success']);
        unset($_SESSION['message-danger']);
        header("Location: https://chat.whatsapp.com/LloG8UlcK0dIitWKa6MpZd");
        exit;
    }
    $store=mysqli_query($conn, "SELECT * FROM store ORDER BY id_store DESC");
    $store_stay=mysqli_query($conn, "SELECT * FROM store_stay");