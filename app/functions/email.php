<?php 

  // function send($data){

  //   $to = 'javaentra21@gmail.com';
  //   $subject = $data -> subject;
  //   $message = $data -> message;
  //   $headers = "From: {$data->email}" . "\r\n" .
  //   'Reply-To: radames_historia@yahoo.com.br' . "\r\n" . 
  //   'X-Mailer: PHP/' . phpversion();

  //   return mail($to, $subject, $message, $headers);
  // }

  function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = '5faae74bc542e4';
    $email->Password = 'd7377e62d48cca';
    $email->isHTML(true);
    $email->setFrom('javaentra21@yahoo.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para visualizar certifique-se que seu programa aceita conteúdo via HTML.';
    $email->MsgHTML($data['mensagem']);

    return $email->send();
  }

?>