<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Articles extends Controller_Blog {
    
    public $template = 'template1';
    public $page_title;
    public $plugins = array('ip', 'category', 'user');
    
    public function action_page() {
        $category = $this->request->param('category');
        $page_id = $this->request->param('parameter');
        $this->mainplace = View::factory('frontend/articles/page');
        if(!Valid::digit($page_id)) {
            $page_id = 1;
        }
        if($category != null) {
            $this->mainplace = View::factory('frontend/articles/category');
            $this->page_title = 'Категория: '.$category;
            $category = ORM::factory('category')
                    ->where('url', '=', $category)
                    ->find();
            
            $articles_count = $category->articles->count_all();
            
            $articles = $category->articles
                    ->order_by('date', 'desc')
                    ->limit(10)
                    ->offset($page_id * 10 - 10)
                    ->find_all();
            
            $this->mainplace->set('category', $category);
        } else {
            $this->mainplace = View::factory('frontend/articles/page');
            $this->page_title = 'Статьи: страница '. $page_id;
            $articles_count = ORM::factory('article')
                ->count_all();

            $articles = ORM::factory('article')
                    ->order_by('date', 'desc')
                    ->limit(10)
                    ->offset($page_id * 10 - 10)
                    ->find_all();
        }
        
        $page_count = ceil($articles_count/10);
        
        $this->mainplace->set('page_id', $page_id)
                ->set('last_page_id', $page_count)
                ->set('articles', $articles);
    }
    
    public function action_article() {
        $article_id = $this->request->param('parameter');
        if(!Valid::digit($article_id)) {
            $this->add_error_message('Запрашиваемая статья не обнаружена. Проверьте правильность ссылки или свяжитесь с администрацией');
            $this->request->redirect();
        }
        $this->mainplace = View::factory('frontend/articles/article');
        $this->page_title = 'Статьи: статья '. $article_id;
        
        $article = ORM::factory('article', $article_id);
        $this->mainplace->set('article', $article);
    }
    
    public function action_index() {
        $this->request->redirect('articles/page/1');
    }
}