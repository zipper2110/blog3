<?php
    $user = Auth::instance();
    if(!$user->logged_in()) {?>
<form action="users/login" method="post" style="margin-bottom: 0">
    <fieldset>
        <div class="control-group" id="username-controlgroup">
            <label class="control-label" for="username">Имя пользователя</label>
            <div class="controls"><div class="input-prepend">
                <span class="add-on">
                    <i class="icon-user"></i>
                </span><input type="text" name="username" id="username-input" class="input-medium" />
            </div>
            </div>
        </div>
        <div class="control-group" id="password-controlgroup">
            <label class="control-label" for="password">Пароль</label>
            <div class="controls"><div class="input-prepend">
                <span class="add-on">
                    <i class="icon-pencil"></i>
                </span><input type="password" name="password" id="password-input" class="input-medium" />
            </div>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" name="form-submit" value="true" class="btn btn-primary"><i class="icon-ok icon-white"></i> Войти</button>
            <button type="reset" class="btn"><i class="icon-remove"></i> Отмена</button>
        </div>
    </fieldset>
</form>
<p><a href="users/recover">Забыли пароль?</a></p>
<p><a href="users/signup">Регистрация</a></p>
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
    <?php }
    else { ?>
    <div class="thumbnail">
        <a href="cabinet"></a>
        <p style="text-align: center; margin-top: 10px"><b><?php echo $user->get_user()->username ?></b><a style="margin-left: 5px; font-size: 12px;" href="users/logout">Выйти</a></p>
        <img src="<?php
            echo AVATAR_PATH;
            $avatar = $user->get_user()->avatar;
            if($avatar == "") {
                $avatar = DEFAULT_AVATAR;
            }
            echo $avatar;
            ?>" alt="мой аватар" />
        </a>
    </div>
    <p style="text-align: center"></p>
    <?php }?>