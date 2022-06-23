<?php
    $punkt_otpr = $_POST['punkt_otpr'];
    $puntk_nazn = $_POST['puntk_nazn'];
	$phone = $_POST['phone'];
    $volume = $_POST['volume'];
    $package = $_POST['package'];
    $type_carg = $_POST['type_carg'];
    $weight = $_POST['weight'];

	$to = "leone18d@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Пункт отправления: $punkt_otpr /n
    Пункт назначения: $puntk_nazn /n
    Объем: $volume /n
    Упаковка: $package /n 
    Номер: $phone ;	/n
    Вид груза: $type_carg; /n
    Вес: $weight";
	mail($to, $subject, $msg, "From: $to ");

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel='icon' href='img/logo.png' type=”image/x-icon”>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style_sended.css">
  <link rel="stylesheet" href="css/normalize.css">
  <title>Форма отправлена</title>
</head>
<body>
  <section>
    <div>
      <p class="text">Ваша заявка успешно отправлена</p>
    </div>
    <div>
      <input type="button" onclick="history.back();" class="btn" value="Назад"/>
    </div>
  </section>
</body>
</html>
