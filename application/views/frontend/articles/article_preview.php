<div class="article well">
<h3>
<a href="<?php echo URL::site('articles/article/'.$article->id) ?>"><?php echo $article->caption ?></a>
</h3>
<div>
<hr class="divider" />
       <?php
            if(isset($article->text)) {
                $article_text = $article->text;
                //var_dump($article_text);
                //$article_text = substr($article_text, 0, strpos($article_text, '<hr class="article_trim" />'));
                //var_dump($article_text);
                echo $article_text;
            }
       ?>
<p><a href="">Читать&nbsp;дальше&nbsp;→</a></p>
</div>
<hr class="divider" />
<div class="row">
<p class="span2">Автор: <a href="<?php echo URL::site('users/user/'.$article->user->id) ?>"><?php echo $article->user->username ?></a></p>
<p class="span2">Категория: <a href="<?php echo URL::site('articles/category/' . $article->category->url) ?>">
    <?php echo (isset($article->category->name) ? $article->category->name : '') ?></a></p>
<p class="pull-right">Дата создания:<?php echo $article->date ?></p>
</div>
</div>