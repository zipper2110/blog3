<ul>
<?php foreach($categories as $category) {
    echo '<li><a href="'.  URL::site('articles/category/'.$category->url).'">';
    echo $category->name;
    echo ' ('.$category->articles->count_all().')</a></li>';
}?>
</ul>