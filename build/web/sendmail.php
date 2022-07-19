<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET["choice"])){
    $option = $_GET["choice"];
    $c = count($option);
    $price = 0.0;
    
    for($i=0;$i<$c;$i++){
        if($option[$i]==1){
            $price += 2000000;
            echo "you have selected Home-indeoendent Villa <br>";
            echo '<img src="../servlets/villa/{$display_img}" width="120px" height="120px" />';
        }
        if($option[$i]==2){
            $price += 8000000;
            echo "you have selected Appartment <br>";
        }
        if($option[$i]==3){
            $price += 5000000;
            echo "you have selected Restaurent <br>";
        }
        if($option[$i]==4){
            $price += 10000000;
            echo "you have selected Shopping Complex <br>";
        }
        
    }
    echo "FINAL PRICE IS:" .$price. "<br";
}
else{
    echo "Select a choice!";
}

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];
    
   
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "ottplatform.gui@gmail.com";
    $mail->Password = 'CS1001&19';
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("ottplatform.gui@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>