<?php

class NewsController {
    public static function actionView($newsId) {
        
        $categories = array();
        $categories = Category::getCategoriesList();
        
        
        $news = News::getNewsById($newsId);
        
        
        require_once(ROOT . '/views/news/news.php');
        return true;
    }
}