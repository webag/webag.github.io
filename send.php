<!-- обработка почты -->
<?php
$cname = htmlspecialchars(strip_tags(trim($_POST['cname'])));
$cphone = htmlspecialchars(strip_tags(trim($_POST['ctel'])));
$cinfo = htmlspecialchars(strip_tags(trim($_POST['cinfo'])));
$ctip = htmlspecialchars(strip_tags(trim($_POST['ctip'])));



$our_email = 'andreiduffy@gmail.com'; //куда посылать заявки, можно через запятую.
$to = $our_email;
$from = 'no-reply@impuls.ru';
$headers = "From: no-reply.impuls.ru <" . $from . ">\r\nContent-type: text/html; charset=utf-8 \r\n";

if($ctip=="call"){
	$subject = 'Перезвоните мне.';
	$message = 'Просьба о звонке от <b>' . $cname . '</b><br/>';
	$message .= 'Телефон: <b>' . $cphone . '</b><br/>';
	$message .= 'Дополнительная информация: <b>' . $cinfo . '</b>';
}

if(!mail($to, $subject, $message, $headers)){
	echo "bad";
} else {
	echo "good";
}
?>
<!-- обработка почты -->
