<h2><?php echo isset($article->caption) ? 'Статья: ' . $article->caption : ''; ?></h2>
<?php
if (isset($article)) {
    echo '<div class="article well">';
    echo '<h3>' . $article->caption . '</h3>';
    echo '<hr class="divider" />';
    echo '<div>';
    echo $article->text;
    echo '</div>';
    echo '<hr class="divider" />';
    echo '<div class="row">';
    echo '<p class="span2">Автор: <a href="' . URL::site('users/user/' . $article->user->id) . '">' . $article->user->username . '</a></p>';
    echo '<p class="span2">Категория: <a href="' . URL::site('articles/category/' . $article->category->url) . '">' . (isset($article->category->name) ? $article->category->name : 'без категории') . '</a></p>';
    echo '<p class="pull-right">Дата создания: ' . $article->date . '</p>';
    echo '</div>';
    echo '</div>';
}?>