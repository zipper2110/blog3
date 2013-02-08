<h2><?php echo isset($category->name) ? 'Категория: '.$category->name : 'Статьи: '; ?> страница <?php echo isset($page_id) ? $page_id : ''; ?></h2>
<?php if(isset($articles)) {
    foreach($articles as $article) {
        $article_template = View::factory('frontend/articles/article_preview');
        $article_template->set('article', $article);
        $article_template->render();
        echo $article_template;
    }
}?>
<div class="pagination pagination-centered">
  <ul>
      <?php
        if(isset($page_id) and isset($last_page_id)) {
            if($last_page_id < 8) {
                for($i = 1; $i <= $last_page_id; $i++) {
                    if($i != $page_id) {
                        echo '<li><a href="'.URL::site('articles/category/'.$category->url.'/page/'.$i).'">'.$i.'</a></li>';
                    } else {
                        echo '<li class="active"><a href="'.URL::site('articles/category/'.$category->url.'/page/'.$i).'">'.$i.'</a></li>';
                    }
                }
            } else {
                // 1. выводим ссылку влево, если страница больше первой - ссылка активна
                if($page_id > 1) {
                    echo '<li><a href="'.URL::site('articles/category/'.$category->url.'/page/'.($page_id-1)).'">←</a></li>';
                } else {
                    echo '<li class="disabled"><a href="'.URL::site('articles/category/'.$category->url.'/page/'.($page_id)).'">←</a></li>';
                }
                
                $pagination_start = $page_id - 2;
                $pagination_end = $page_id + 2;
                if($page_id == 1) {
                    $pagination_start = 1;
                    $pagination_end = 5;
                }
                if($page_id == $last_page_id) {
                    $pagination_start = $last_page_id - 4;
                    $pagination_end = $last_page_id;
                }
                if($pagination_start < 4) {
                    $pagination_start = 2;
                    if($pagination_end < 5) {
                        $pagination_end = 5;
                    }
                }
                if($pagination_end > ($last_page_id - 3)) {
                    $pagination_end = $last_page_id - 1;
                    if($pagination_start > $last_page_id - 4) {
                        $pagination_start = $last_page_id - 4;
                    }
                }
                // 2. выводим ссылку на первую страницу, она будет всегда
                echo ($page_id == 1) ? '<li class="active"><a href="'.URL::site('articles/category/'.$category->url.'/page/1').'">1</a></li>' 
                        : '<li><a href="'.URL::site('articles/page/1').'">1</a></li>';
                // 3. Многоточие, если между первой страницей и началом блока номеров пропущено больше 1 страницы
                if($pagination_start > 3) {
                    echo '<li class="disabled"><a href="'.URL::site('articles/category/'.$category->url.'/page/'.$page_id).'">...</a></li>';
                }
                // 4. блок номеров от начала и до конца
                for($i = $pagination_start; $i <= $pagination_end; $i++) {
                    if($i != $page_id) {
                        echo '<li><a href="'.URL::site('articles/category/'.$category->url.'/page/'.$i).'">'.$i.'</a></li>';
                    } else {
                        echo '<li class="active"><a href="'.URL::site('articles/category/'.$category->url.'/page/'.$i).'">'.$i.'</a></li>';
                    }
                }
                // 5. многоточие, если между последней страницей и концом блока номеров пропущено больше 1 страницы
                if($pagination_end < $last_page_id - 2) {
                    echo '<li class="disabled"><a href="'.URL::site('articles/category/'.$category->url.'/page/'.$page_id).'">...</a></li>';
                }
                // 6. выводим ссылку на последнюю страницу, она будет всегда
                echo ($page_id == $last_page_id) ? 
                        '<li class="active"><a href="'.URL::site('articles/category/'.$category->url.'/page/'.$last_page_id).'">'.$last_page_id.'</a></li>' 
                        : '<li><a href="'.URL::site('articles/category/'.$category->url.'/page/'.$last_page_id).'">'.$last_page_id.'</a></li>';
                
                // 7. если страница меньше последней, то показываем переключатель на следующую страницу
                if($page_id < $last_page_id) {
                    echo '<li><a href="'.URL::site('articles/category/'.$category->url.'/page/'.($page_id + 1)).'">→</a></li>';
                } else {
                    echo '<li class="disabled"><a href="'.URL::site('articles/category/'.$category->url.'/page/'.($page_id)).'">→</a></li>';
                }
            }
        }
      ?>
  </ul>
</div>