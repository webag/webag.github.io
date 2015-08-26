<!-- обработка почты -->
<?php
$cname = htmlspecialchars(strip_tags(trim($_POST['cname'])));
$dolg = htmlspecialchars(strip_tags(trim($_POST['dolg'])));
$science = htmlspecialchars(strip_tags(trim($_POST['science'])));
$work = htmlspecialchars(strip_tags(trim($_POST['work'])));
$text = htmlspecialchars(strip_tags(trim($_POST['text'])));
$ctip = htmlspecialchars(strip_tags(trim($_POST['ctip'])));



$our_email = 'andreiduffy@gmail.com'; //куда посылать заявки, можно через запятую.
$to = $our_email;
$from = 'no-reply@rettsyndrome.ru';
$headers = "From: rettsyndrome.ru <" . $from . ">\r\nContent-type: text/html; charset=utf-8 \r\n";

if($ctip=="article"){
	$subject = 'Прислана статья.';
	$message = 'Ф.И.О.: <b>' . $cname . '</b><br/>';
	$message .= 'Должность: <b>' . $dolg . '</b><br/>';
	$message .= 'Научное звание: <b>' . $science . '</b><br/>';
	$message .= 'Место работы: <b>' . $work . '</b><br/>-----------------------------<br/>';
	$message .= 'Текст статьи: <br>' . $text . '<br/>';
}

if(!mail($to, $subject, $message, $headers)){
	echo "bad";
} else {
	echo "good";
}
?>
<!-- обработка почты -->
