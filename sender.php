<?php
  require_once('phpmailer/PHPMailerAutoload.php');
  $mail = new PHPMailer;
  $mail->CharSet = 'utf-8';

  $punkt_otpr = $_POST['punkt_otpr'];
  $puntk_nazn = $_POST['puntk_nazn'];
	$phone = $_POST['phone'];
  $volume = $_POST['volume'];
  $package = $_POST['package'];
  $type_carg = $_POST['type_carg'];
  $weight = $_POST['weight'];

  $mail->isSMTP();
  $mail->Host = 'smtp.mail.ru'; 
  $mail->SMTPAuth = true;
  $mail->Username = 'alpha_traid@mail.ru';
  $mail->Password = 'fkmafnhtql_475';
  $mail->SMTPSecur = 'ssl';
  $mail->Port = 465;
  
  $mail ->setFrom('alpha_traid@mail.ru')
  $mail->addAddres('leone18d@gmail.com')
  $mail->IsHTML(true)
  
  $mail->Subject = 'Заявка с сайта';
  $mail->Body = 
    "Пункт отправления:" .$punkt_otpr.
    "Пункт назначения:" .$puntk_nazn.
    "Объем:" .$volume.
    "Упаковка:" .$package.
    "Номер:" .$phone.
    "Вид груза:" .$type_carg.
    "Вес:" .$weight;

    if(!$mail->send()) {
      echo 'Error';
  } else {
      header('location: Sended.html');
  }
?>
