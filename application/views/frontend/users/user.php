<div class="page-header"><h1>Страница пользователя <?php echo isset($user->username) ? $user->username : ''; ?></h1></div>
<div class="row">
    <div class="span3">
        <div class="thumbnail">
            <img src="img/users/<?php echo isset($user->id) ? $user->id : ''; ?>-avatar.jpg" alt="аватар пользователя "<?php echo $user->username;?> />
            <div class="caption" style="text-align: center">
                <p><?php echo isset($username) ? $username : ''; ?></p>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <p>
                <a href="users/comments">Статьи пользователя</a>
            </p>
            <p>
                <a href="users/comments">Комментарии пользователя</a>
            </p>
        </div>
    </div>
</div>