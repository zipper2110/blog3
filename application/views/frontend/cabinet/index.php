<div class="page-header"><h1>Кабинет пользователя <?php echo isset($username) ? $username : ''; ?></h1></div>
<div class="row">
    <div class="span3">
        <div class="thumbnail">
            <p style="text-align: center"><b><?php echo isset($username) ? $username : ''; ?></b></p>
            <img src="img/avatar/<?php echo isset($avatar) ? $avatar : ''; ?>" alt="мой аватар" />
            <div class="caption" style="text-align: center">
                <button class="btn btn-primary" id="change-avatar">Изменить аватар</button>
                <form class="well" action="/cabinet" method="post" enctype="multipart/form-data" id="change-avatar-form" style="display: none">
                    <input type="file" name="file" style="width:100%">
                    <input type="submit" name="file-submit" class="btn btn-primary" value="Выбрать">
                </form>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <p>
                <a href="cabinet/my_settings">Настройки пользователя</a>
            </p>
            <p>
                <a href="cabinet/my_articles">Мои статьи</a>
            </p>
            <p>
                <a href="cabinet/my_comments">Мои комментарии</a>
            </p>
        </div>
    </div>
</div>
    <script type="text/javascript">
        $('#change-avatar').bind('click', function() {
            $('#change-avatar').css({display: "none"});
            $('#change-avatar-form').css({display: "block"});
        });
    </script>