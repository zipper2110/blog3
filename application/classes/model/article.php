<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends ORM {
    
    protected $_belongs_to = array(
        'user' => array(
            'foreign_key' => 'author_id'
        ),
        'category' => array(
            'foreign_key' => 'category_id'
        )
    );
}