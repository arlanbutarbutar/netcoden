<?php if(!isset($_SESSION)){session_start();}
function subscribe($data){global $conn;
    $email=htmlspecialchars(addslashes(trim(strtolower(mysqli_real_escape_string($conn, $data['email'])))));
    require_once("mail.php");
    $to       = 'arlan270899@gmail.com';
    $subject  = 'Visitor Messages';
    $message  = '
        <div style="margin: 0; padding: 0;">
            <p>Yeah... '.$email.' telah mensubscribe Netmedia Framecode!!</p>
        </div>
    ';
    smtp_mail($to, $subject, $message, '', '', 0, 0, true);
    return mysqli_affected_rows($conn);
}
function contact($data){global $conn;
    $name=htmlspecialchars(addslashes(trim(strtolower(mysqli_real_escape_string($conn, $data['name'])))));
    $email=htmlspecialchars(addslashes(trim(strtolower(mysqli_real_escape_string($conn, $data['email'])))));
    $message=htmlspecialchars(addslashes(trim(strtolower(mysqli_real_escape_string($conn, $data['message'])))));
    require_once("mail.php");
    $to       = 'arlan270899@gmail.com';
    $subject  = 'Messages from '.$name;
    $message  = '
        <div style="margin: 0; padding: 0;">
            <p>'.$name.' telah mengirim pesan kepada Netmedia Framecode sebagai berikut: "'.$message.'". Jika kamu ingin membalas pesan silakan lewat email terkait '.$email.'</p>
        </div>
    ';
    smtp_mail($to, $subject, $message, '', '', 0, 0, true);
    return mysqli_affected_rows($conn);
}
function join_group($data){global $conn;
    $check_group=mysqli_query($conn, "SELECT * FROM user_group ORDER BY id_group DESC LIMIT 1");
    if(mysqli_num_rows($check_group)>0){
        $row=mysqli_fetch_assoc($check_group);
        $id_group=$row['id_group'];
        $id_group=$id_group+1;
    }else if(mysqli_num_rows($check_group)==0){
        $id_group=1;
    }
    $username=htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['username']))));
    $email=htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['email']))));
    $user_group=mysqli_query($conn, "SELECT * FROM user_group WHERE email='$email'");
    if(mysqli_fetch_assoc($user_group)){
        $_SESSION['message-danger']="You are already registered as a member of the Netmedia Framecode group!";
        header("Location: form-group");return false;
    }
    $wa=htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['no-hp']))));
    $cek_wa=strlen($wa);
    if($cek_wa>12){
        $_SESSION['message-danger']="Sorry, you entered a phone number with more than 12 digits!";
        header("Location: form-group");return false;
    }
    if(!is_numeric($cek_wa)){
        $_SESSION["message-danger"]="You didn't enter your phone number correctly!";
        header("Location: form-group");return false;
    }
    $question_one=htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['question-1']))));
    $filter_questionOne=filter_var($question_one, FILTER_SANITIZE_STRING);
    $question_two=htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['question-2']))));
    $filter_questionTwo=filter_var($question_two, FILTER_SANITIZE_STRING);
    $question_three=htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['question-3']))));
    $filter_questionThree=filter_var($question_three, FILTER_SANITIZE_STRING);
    $question_four=htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['question-4']))));
    $filter_questionFour=filter_var($question_four, FILTER_SANITIZE_STRING);
    $date=date('l, d M Y');
    mysqli_query($conn, "INSERT INTO user_group(id_group,username,email,wa,question_one,question_two,question_three,question_four,date) VALUES ('$id_group','$username','$email','$wa','$filter_questionOne','$filter_questionTwo','$filter_questionThree','$filter_questionFour','$date')");
    $_SESSION['id-group']=$id_group;
    return mysqli_affected_rows($conn);
}