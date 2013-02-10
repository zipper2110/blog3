<div class="article-list">
    <form>
        <fieldset>
        <legend>
            Список статей
        </legend>
        <div style="margin-top: 10px">
        <?php  if(isset($articles) and (is_array($articles))) { ?>
        <table class="table table-hover table-bordered table-striped">
            <colgroup>
                <col class="span1" />
                <col class="span3" />
                <col class="span2" />
                <col class="span1" />
                <col class="span1" />
                <col class="span1" />
                <col class="span1" />
            </colgroup>
            <thead>
                <tr>
                    <th>Отметить</th>
                    <th>Название статьи</th>
                    <th>Автор</th>
                    <th>Дата создания</th>
                    <th>Рейтинг</th>
                    <th>Комментарии</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($articles as $article) { ?>
                <tr>
                    <td><input type="checkbox" name="<?php echo $article->id; ?>"></td>
                    <td><a href=""><?php echo $article->caption; ?></a></td>
                    <td><a href=""><?php echo $article->user->username; ?></a></td>
                    <td><?php echo $article->date; ?></td>
                    <td><?php ?></td>
                    <td><?php ?></td>
                    <td>
                        <a href="<?php ?>"><i class="icon-pencil"></i></a>
                        <a href="<?php ?>"><i class="icon-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php } else { ?>
            <div class="well">
                <h1>Нет статей</h1>
            </div>
        <?php } ?>
        </div>
        </fieldset>
    </form>
</div>