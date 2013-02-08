<form class="form-horizontal" action="users/recover" method="post">
    <fieldset>
        <legend>Восстановление аккаунта</legend>
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
        <div class="form-actions">
            <button type="submit" name="form-submit" value="true" class="btn btn-primary"><i class="icon-ok icon-white"></i> Восстановить</button>
            <a href="" class="btn"><i class="icon-remove"></i> Отмена</a>
        </div>
    </fieldset>
</form>
<script>
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
                    $('#email-controlgroup').addClass('success');
                    $('#email-controlgroup').removeClass('error');
                    $('#email-help-block').text('Е-мэйл корректен');

                }
                if(json.state !== 1) {
                    $('#email-controlgroup').addClass('error');
                    $('#email-controlgroup').removeClass('success');
                    $('#email-help-block').text('Пользователя с таким е-мэйлом не существует');
                }
            }
        });
    }
});

</script>