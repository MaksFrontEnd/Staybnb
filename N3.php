<?php
$name = $_POST['fio'];
$email = $_POST['email'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);
$name = trim($name);
$email = trim($email);
$message = trim($message);
//echo $name;
//echo "<br>";
//echo $email;
if (mail("spizhovyimaksworld@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email." Сообщение: ".$message ,"From: info@satename.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>