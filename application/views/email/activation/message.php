Здравствуйте, <?php echo isset($username)? $username : '' ?>!
Вы начали процесс регистрации на сайте <?php echo isset($sitename)? $sitename : '' ?>. 
Перейдите по этой ссылке для завершения регистрации:

http://<?php echo isset($site_address)? $site_address : '' ?>/users/activation/<?php echo isset($activation_code)? $activation_code : '' ?>

Если вы не регистрировались на сайте <?php echo isset($sitename)? $sitename : '' ?>, проигнорируйте это сообщение.

Добро пожаловать на <?php echo isset($sitename)? $sitename : '' ?>!

Это письмо было отправлено автоматически, пожалуйста, не отвечайте на него.