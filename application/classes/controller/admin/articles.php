<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Articles extends Controller_Admin {
    
    public $template = 'admin1';

    public function before() {
        parent::before();
    }
    
    public function after() {
        parent::after();
    }
    
    public function action_index() {
        
    }
    
    public function action_edit() {
        
    }
    
    public function action_create() {
        if($this->request->post('form-submit') == 'true') {
            $article_caption = $this->request->post('caption');
            $article_text = $this->request->post('text');
            $article_category = $this->request->post('category');

            $data_valid = 1;

            if(!Valid::numeric($article_category)) {
                $this->add_error_message('Внутренняя ошибка: категория задана неверно');
                $data_valid = 0;
            }

            if(!Valid::not_empty($article_caption)) {
                $this->add_error_message('Не указано название статьи. Статья не была сохранена');
                $data_valid = 0;
            }

            if(!Valid::not_empty($article_text)) {
                $this->add_error_message('Текст статьи пуст. Статья не была сохранена');
                $data_valid = 0;
            }

            if($data_valid == 1) {
                $article = ORM::factory('article');
                $article->caption = $article_caption;
                $article->text = $article_text;
                $article->author_id = $this->user->get_user()->id;
                $article->category_id = $article_category;
                $article->save();

                if($article->saved()) {
                    $this->add_success_message('Статья была успешно сохранена');
                    $this->request->redirect('admin/articles');
                } else {
                    $this->add_error_message('Внутренняя ошибка базы данных при сохранении статьи');
                }
            }

        }
        $this->mainplace = View::factory("admin/articles/create");
        $this->page_title = 'Создание статьи';

        $categories = ORM::factory('category');
        $cat = $categories->find_all()->as_array();
        $this->mainplace->set('categories', $cat);
    }
    
    public function _delete() {
        
    }
    
    public function _edit() {
        
    }
    
    public function _create() {
        
    }
    
    public function _hide() {
        
    }
    
    public function _show() {
        
    }
}