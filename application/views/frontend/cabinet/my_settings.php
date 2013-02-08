<div class="page-header"><h1>Настройки пользователя <?php echo isset($username) ? $username : ''; ?></h1></div>
<div class="page-header">
    <h3>Изменение учетных данных</h3>
</div>
<div class="row">
    <div class="span4 well">
        <form action="" method="post">
            <h4 class="page-header">Смена адреса электронной почты</h4>

            <div class="control-group" id="email-controlgroup">
                <label class="control-label" for="email">Е-мэйл</label>

                <div class="controls">
                    <div class="input-prepend">
                <span class="add-on">
                    <i class="icon-envelope"></i>
                </span><input type="text" name="email" id="email-input" class="input-xlarge"
                               value="<?php echo isset($email) ? $email : ''; ?>"/>
                    </div>
                    <p class="help-block" id="email-help-block">Вы можете изменить свой текущий адрес электронной
                        почты</p>
                </div>
            </div>
            <input type="hidden" name="email_form-submit" value="1"/>
            <input type="submit" class="btn-primary" value="Изменить"/>
        </form>
    </div>
    <div class="span4 well">
        <form action="" method="post">
            <h4 class="page-header">Смена пароля</h4>
            <div class="control-group" id="old_password-controlgroup">
                <label class="control-label" for="old_password">Текущий пароль</label>

                <div class="controls">
                    <div class="input-prepend">
                <span class="add-on">
                    <i class="icon-ok"></i>
                </span><input type="password" name="old_password" id="old_password-input" class="input-xlarge"
                               placeholder="Ваш текущий пароль"/>
                    </div>
                    <p class="help-block" id="old_password-help-block">Введите ваш текущий пароль</p>
                </div>
            </div>
            <div class="control-group" id="password-controlgroup">
                <label class="control-label" for="password">Новый пароль</label>

                <div class="controls">
                    <div class="input-prepend">
                <span class="add-on">
                    <i class="icon-pencil"></i>
                </span><input type="password" name="password" id="password-input" class="input-xlarge"
                               placeholder="Новый пароль"/>
                    </div>
                    <p class="help-block" id="password-help-block">Введите новый пароль</p>
                </div>
            </div>
            <div class="control-group" id="password_confirm-controlgroup">
                <label class="control-label" for="password_confirm">Повторите пароль</label>

                <div class="controls">
                    <div class="input-prepend">
                <span class="add-on">
                    <i class="icon-repeat"></i>
                </span><input type="password" name="password_confirm" id="password_confirm-input" class="input-xlarge"
                               placeholder="Повторите пароль"/>
                    </div>
                    <p class="help-block" id="password_confirm-help-block">Повторите ввод нового пароля</p>
                </div>
            </div>
            <input type="hidden" name="password_form-submit" value="1"/>
            <input type="submit" class="btn-primary" value="Изменить"/>
        </form>
    </div>
</div>