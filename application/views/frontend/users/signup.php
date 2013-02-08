<form class="form-horizontal" action="users/signup" method="post">
    <fieldset>
        <legend>Регистрация пользователя</legend>
        <div class="control-group" id="username-controlgroup">
            <label class="control-label" for="username">Имя пользователя</label>
            <div class="controls"><div class="input-prepend">
                <span class="add-on">
                    <i class="icon-user"></i>
                </span><input type="text" name="username" id="username-input" class="input-xlarge" value="<?php echo isset($username_value) ? $username_value : '' ; ?>" />
                </div>
                <p class="help-block" id="username-help-block">Введите желаемое имя пользователя</p>
            </div>
        </div>
        <div class="control-group"  id="email-controlgroup">
            <label class="control-label" for="email">Е-мэйл</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on">
                    <i class="icon-envelope"></i>
                </span><input type="text" name="email" id="email-input" class="input-xlarge" value="<?php echo isset($email_value) ? $email_value : '' ; ?>" />
                </div>
                <p class="help-block" id="email-help-block">Введите свой адрес электронной почты</p>
            </div>
        </div>
        <div class="control-group" id="password-controlgroup">
            <label class="control-label" for="password">Пароль</label>
            <div class="controls"><div class="input-prepend">
                <span class="add-on">
                    <i class="icon-pencil"></i>
                </span><input type="password" name="password" id="password-input" class="input-xlarge" />
                </div>
                <p class="help-block" id="password-help-block">Введите пароль, который будет использоваться для входа в систему</p>
            </div>
        </div>
        <div class="control-group" id="password-confirm-controlgroup">
            <label class="control-label" for="password-confirm">Повторите пароль</label>
            <div class="controls"><div class="input-prepend">
                <span class="add-on">
                    <i class="icon-pencil"></i>
                </span><input type="password" name="password-confirm" id="password-confirm-input" class="input-xlarge" />
                </div>
                <p class="help-block" id="password-confirm-help-block">Введите пароль еще раз</p>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" name="form-submit" value="true" class="btn btn-primary"><i class="icon-ok icon-white"></i> Отправить</button>
            <a href="" class="btn"><i class="icon-remove"></i> Отмена</a>
        </div>
    </fieldset>
</form>
<script>
$('#username-input').bind('keyup', function() {
    if($('#username-input').val() == '') {
        $('#username-controlgroup').addClass('warning');
        $('#username-controlgroup').removeClass('success');
                $('#username-controlgroup').removeClass('error');
        $('#username-help-block').text('Имя пользователя не может быть пустым');
    } else {
    $.ajax({
        url: "<?php echo URL::site('ajax/check_username') ?>",
        type: "POST",
        data: "username=" + $('#username-input').val(),
        dataType: "json",
        success: function(json) {
            if(json.busy) {
                $('#username-controlgroup').addClass('error');
                $('#username-controlgroup').removeClass('success');
                $('#username-controlgroup').removeClass('warning');
                $('#username-help-block').text('Имя пользователя занято. Выберите другое имя пользователя');
                
            } else {
                $('#username-controlgroup').removeClass('error');
                $('#username-controlgroup').addClass('success');
                $('#username-controlgroup').removeClass('warning');
                $('#username-help-block').text('Имя пользователя свободно');
            }
        }
    });}
});

$('#email-input').bind('keyup', function() {
    if($('#email-input').val() == '') {
            $('#email-controlgroup').addClass('warning');
            $('#email-controlgroup').removeClass('success');
            $('#email-controlgroup').removeClass('error');
            $('#email-help-block').text('Е-мэйл не может быть пустым. Введите корректный адрес');
    } else {
        $.ajax({
            url: "<?php echo URL::site('ajax/check_email') ?>",
            type: "POST",
            data: "email=" + $('#email-input').val(),
            dataType: "json",
            success: function(json) {
                if(json.state == 1) {
                    $('#email-controlgroup').addClass('error');
                    $('#email-controlgroup').removeClass('success');
                    $('#email-controlgroup').removeClass('warning');
                    $('#email-help-block').text('Е-мэйл уже используется. Выберите другой адрес');

                }
                if(json.state == 2) {
                    $('#email-controlgroup').addClass('warning');
                    $('#email-controlgroup').removeClass('success');
                    $('#email-controlgroup').removeClass('error');
                    $('#email-help-block').text('Е-мэйл введен неправильно. Введите корректный адрес');
                }
                if(json.state == 0) {
                    $('#email-controlgroup').addClass('success');
                    $('#email-controlgroup').removeClass('error');
                    $('#email-controlgroup').removeClass('warning');
                    $('#email-help-block').text('Е-мэйл корректен');
                }
            }
        });
    }
});

$('#password-input').bind('keyup', function() {
    if($('#password-input').val() == $('#password-confirm-input').val()) {
        $('#password-controlgroup').addClass('success');
        $('#password-controlgroup').removeClass('error');
        $('#password-controlgroup').removeClass('warning');
        $('#password-help-block').text('Пароль корректен');
        
        $('#password-confirm-controlgroup').addClass('success');
        $('#password-confirm-controlgroup').removeClass('error');
        $('#password-confirm-controlgroup').removeClass('warning');
        $('#password-confirm-help-block').text('Пароль корректен');
        if($('#password-input').val() == '') {
            $('#password-controlgroup').addClass('warning');
            $('#password-controlgroup').removeClass('error');
            $('#password-controlgroup').removeClass('success');
            $('#password-help-block').text('Пароль не может быть пустым');
            
            $('#password-confirm-controlgroup').addClass('warning');
            $('#password-confirm-controlgroup').removeClass('error');
            $('#password-confirm-controlgroup').removeClass('success');
        $('#password-confirm-help-block').text('Пароль не может быть пустым');
        }
    } else {
        $('#password-controlgroup').addClass('error');
        $('#password-controlgroup').removeClass('warning');
        $('#password-controlgroup').removeClass('success');
            $('#password-help-block').text('Пароли не совпадают');
        
        $('#password-confirm-controlgroup').addClass('error');
        $('#password-confirm-controlgroup').removeClass('warning');
        $('#password-confirm-controlgroup').removeClass('success');
        $('#password-confirm-help-block').text('Пароли не совпадают');
    }
});

$('#password-confirm-input').bind('keyup', function() {
    if($('#password-input').val() == $('#password-confirm-input').val()) {
        $('#password-controlgroup').addClass('success');
        $('#password-controlgroup').removeClass('error');
        $('#password-controlgroup').removeClass('warning');
        $('#password-help-block').text('Пароль корректен');
        
        $('#password-confirm-controlgroup').addClass('success');
        $('#password-confirm-controlgroup').removeClass('error');
        $('#password-confirm-controlgroup').removeClass('warning');
        $('#password-confirm-help-block').text('Пароль корректен');
        if($('#password-input').val() == '') {
            $('#password-controlgroup').addClass('warning');
            $('#password-controlgroup').removeClass('error');
            $('#password-controlgroup').removeClass('success');
            $('#password-help-block').text('Пароль не может быть пустым');
            
            $('#password-confirm-controlgroup').addClass('warning');
            $('#password-confirm-controlgroup').removeClass('error');
            $('#password-confirm-controlgroup').removeClass('success');
        $('#password-confirm-help-block').text('Пароль не может быть пустым');
        }
    } else {
        $('#password-controlgroup').addClass('error');
        $('#password-controlgroup').removeClass('warning');
        $('#password-controlgroup').removeClass('success');
            $('#password-help-block').text('Пароли не совпадают');
        
        $('#password-confirm-controlgroup').addClass('error');
        $('#password-confirm-controlgroup').removeClass('warning');
        $('#password-confirm-controlgroup').removeClass('success');
        $('#password-confirm-help-block').text('Пароли не совпадают');
    }
});
</script>