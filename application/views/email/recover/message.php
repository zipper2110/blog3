Здравствуйте, <?php echo isset($username)? $username : '' ?>!
Вы запустили процедуру восстановления аккаунта на сайте <?php echo isset($sitename)? $sitename : '' ?>. 

Ваше имя пользователя (логин):
"<?php echo isset($username)? $username : '' ?>"


Ваш пароль:
"<?php echo isset($password)? $password : '' ?>"


Для входа на сайт введите эти данные на странице: http://<?php echo isset($site_address)? $site_address : '' ?>/users/login
Вы можете изменить пароль на другой в личном кабинете.

Если вы не регистрировались на сайте <?php echo isset($sitename)? $sitename : '' ?>, проигнорируйте это сообщение.

Добро пожаловать на <?php echo isset($sitename)? $sitename : '' ?>!

Это письмо было отправлено автоматически, пожалуйста, не отвечайте на него.