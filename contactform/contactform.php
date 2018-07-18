<?php

if(empty($_POST['name'])
   empty($_POST['email'])
   empty($_POST['subject'])
   empty($_POST['message'])
   !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
   {
		echo "No arguments Provided!";
		return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'in2687@naver.com';
$eamil_subject = "메일이 도착했습니다 : $name";
$email_body = "당신의 개인 홈페이지에서 메일이 도착했습니다. \n\n", "이름 : $name\n\n 이메일 : $email_addess\n\n 주제 : $subject\n\n 내용 : \n$message";
$headers = "From : www.bnkc.kr";
mail($to, $email_subject, $email_body, $headers);
return true;

?>