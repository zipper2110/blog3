<form class="form-horizontal" action="users/login" method="post">
    <fieldset>
        <legend>Авторизация</legend>
        <div class="control-group" id="username-controlgroup">
            <label class="control-label" for="username">Имя пользователя</label>
            <div class="controls"><div class="input-prepend">
                <span class="add-on">
                    <i class="icon-user"></i>
                </span><input type="text" name="username" id="username-input" class="input-xlarge" value="<?php echo isset($username_value) ? $username_value : '' ; ?>" />
                </div>
                <p class="help-block" id="username-help-block">Введите ваше имя пользователя</p>
            </div>
        </div>
        <div class="control-group" id="password-controlgroup">
            <label class="control-label" for="password">Пароль</label>
            <div class="controls"><div class="input-prepend">
                <span class="add-on">
                    <i class="icon-pencil"></i>
                </span><input type="password" name="password" id="password-input" class="input-xlarge" />
                </div>
                <p class="help-block" id="password-help-block">Введите ваш пароль</p>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" name="form-submit" value="true" class="btn btn-primary"><i class="icon-ok icon-white"></i> Войти</button>
            <button type="reset" class="btn"><i class="icon-remove"></i> Отмена</button>
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
                $('#username-controlgroup').addClass('success');
                $('#username-controlgroup').removeClass('error');
                $('#username-controlgroup').removeClass('warning');
                $('#username-help-block').text('Пользователь существует');
                
            } else {
                $('#username-controlgroup').removeClass('success');
                $('#username-controlgroup').addClass('error');
                $('#username-controlgroup').removeClass('warning');
                $('#username-help-block').text('Пользователь не существует');
            }
        }
    });}
});
</script>