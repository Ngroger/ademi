<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $admin_email = $_POST['admin_email'];

    $error = '';

    if(!$name) {$error .= 'Укажите свое имя. ';}

    if(!$email) {$error .= 'Укажите свой E-mail. ';}


    if(!$error) {
        $address = $admin_email;
        $mes = "Имя: ".$name."\n\nE-mail: " .$email."\n\nТекст отзыва: ".$text."";
        $text = "\n\nОтзыв с сайта";
        $send = mail ($address,$text,$mes,"Content-type:text/plain; charset = UTF-8");
        if($send) {header('Location:/');

        }
    }
    else {echo '<div class="err">'.$error.'</div>';}
}
?>