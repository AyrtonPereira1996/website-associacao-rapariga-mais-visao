<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    
    require '_phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    // SMTP CONFIGURATION
    $mail->isSMTP();
    $mail->CharSet='UTF-8';
    $mail->Host='smtp.gmail.com';
    $mail->Port= 587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='ayrton.pereira1996@gmail.com';
    $mail->Password='Xiluva$1996';

    // $mail->Username='associacao.raparigasmaisvisao@gmail.com';
    // $mail->Password='fati.tani';

    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('associacao.raparigasmaisvisao@gmail.com');
    $mail->addReplyTo($_POST['email']);


    $mail->isHTML(true);
    $mail->Subject='Mensagem de website: '. $_POST['subject'];
    $mail->Body='Nome do remetente: '. $_POST['name']. "<br> E-mail do remetente: ".$_POST['email']. "<br> Assunto: ". $_POST['subject']."<br> Mensagem: <br> ". $_POST['message']. " <br> Hora de envio da mensagem: ". date('h:m:i d/m/Y'). " por ". $_SERVER['REMOTE_ADDR'];
    $mail->AltBody = "Nome do remetente: ". $_POST['name']. "\n\n  E-mail do remetente: ".$_POST['email']. "\n\n  Assunto: ". $_POST['subject']."\n\n  Mensagem: \n\n ". $_POST['message']. "Hora de envio da mensagem: ". date('h:m:i d/m/Y'). " por ". $_SERVER['REMOTE_ADDR']  ;


    if ($mail->send()) {
        $status = 'success';
        $response = "Email enviado com sucesso";
        exit(json_encode(array("status"=>$status, "response"=>$response)));
    } else {
       $status = 'failed';
       $response = 'Ooops! Não foi possível enviar o email'. $mail->ErrorInfo;
       exit(json_encode(array("status"=>$status, "response"=>$response)));
    }
    

} 




?>